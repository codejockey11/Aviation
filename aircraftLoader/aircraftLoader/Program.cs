using System;
using System.IO;
using System.Xml;
using System.Collections.Generic;
using System.Text;

namespace aircraftLoader
{
    public class HolderNames
    {
        public String TcdsHolderId;
        public String TcdsHolder;

        public HolderNames(String id, String h)
        {
            TcdsHolderId = id;
            TcdsHolder = h;
        }
    }

    public class CompareHolderNames : IComparer<HolderNames>
    {
        public int Compare(HolderNames a, HolderNames b)
        {
            return String.Compare(a.TcdsHolderId, b.TcdsHolderId);
        }
    }

    public class ProductTypes
    {
        public String ProductTypeId;
        public String ProductType;

        public ProductTypes(String id, String h)
        {
            ProductTypeId = id;
            ProductType = h;
        }
    }

    public class CompareProductTypes : IComparer<ProductTypes>
    {
        public int Compare(ProductTypes a, ProductTypes b)
        {
            return String.Compare(a.ProductTypeId, b.ProductTypeId);
        }
    }

    public class ProductSubtypes
    {
        public String ProductSubtypeId;
        public String ProductTypeId;
        public String ProductSubtype;

        public ProductSubtypes(String sid, String id, String h)
        {
            ProductSubtypeId = sid;
            ProductTypeId = id;
            ProductSubtype = h;
        }
    }

    public class CompareProductSubtypes : IComparer<ProductSubtypes>
    {
        public int Compare(ProductSubtypes a, ProductSubtypes b)
        {
            return String.Compare(a.ProductSubtypeId, b.ProductSubtypeId);
        }
    }

    public class TCDSRevisions
    {
        public String TcdsRevisionId;
        public String TcdsId;
        public String OfficeId;
        public String TcdsHolderId;

        public TCDSRevisions(String rid, String id, String oid, String hid)
        {
            TcdsRevisionId = rid;
            TcdsId = id;
            OfficeId = oid;
            TcdsHolderId = hid;
        }
    }

    public class CompareTCDSRevisions : IComparer<TCDSRevisions>
    {
        public int Compare(TCDSRevisions a, TCDSRevisions b)
        {
            return String.Compare(a.TcdsRevisionId, b.TcdsRevisionId);
        }
    }

    public class TCDS
    {
        public String TcdsId;
        public String TcdsNumber;

        public TCDS(String id, String n)
        {
            TcdsId = id;
            TcdsNumber = n;
        }
    }

    public class CompareTCDS : IComparer<TCDS>
    {
        public int Compare(TCDS a, TCDS b)
        {
            return String.Compare(a.TcdsId, b.TcdsId);
        }
    }

    class Program
    {
        static StreamWriter sw = new StreamWriter("aircraft.txt");

        static String ModelId;
        static String TcdsRevisionId;
        static String Model;
        static String ProductSubtypeId;

        static List<HolderNames> holderNames = new List<HolderNames>();
        static CompareHolderNames cholderNames = new CompareHolderNames();

        static List<ProductTypes> productTypes = new List<ProductTypes>();
        static CompareProductTypes cproductTypes = new CompareProductTypes();

        static List<ProductSubtypes> productSubtypes = new List<ProductSubtypes>();
        static CompareProductSubtypes cproductSubtypes = new CompareProductSubtypes();

        static List<TCDSRevisions> tcdsRevisions = new List<TCDSRevisions>();
        static CompareTCDSRevisions ctcdsRevisions = new CompareTCDSRevisions();

        static List<TCDS> tcds = new List<TCDS>();
        static CompareTCDS ctcds = new CompareTCDS();

        static List<String> finalTable = new List<String>();

        static void LoadHolderNames()
        {
            String TcdsHolderId = "";
            String TcdsHolder = "";

            XmlReader reader = XmlReader.Create("tbl_TcdsHolders.xml");

            Boolean firstTime = true;

            while (reader.Read())
            {
                if (reader.NodeType == XmlNodeType.Element)
                {
                    if (reader.LocalName == "TcdsHolderId")
                    {
                        if (firstTime)
                        {
                            firstTime = false;
                        }
                        else
                        {
                            holderNames.Add(new HolderNames(TcdsHolderId, TcdsHolder));
                        }

                        TcdsHolderId = reader.ReadElementContentAsString().Trim();
                    }

                    if (reader.LocalName == "TcdsHolder")
                    {
                        TcdsHolder = reader.ReadElementContentAsString().Trim();
                    }
                }
            }

            reader.Close();

            holderNames.Sort(cholderNames);
        }

        static void LoadProductTypes()
        {
            String ProductTypeId = "";
            String ProductType = "";

            XmlReader reader = XmlReader.Create("tbl_ProductTypes.xml");

            Boolean firstTime = true;

            while (reader.Read())
            {
                if (reader.NodeType == XmlNodeType.Element)
                {
                    if (reader.LocalName == "ProductTypeId")
                    {
                        if (firstTime)
                        {
                            firstTime = false;
                        }
                        else
                        {
                            productTypes.Add(new ProductTypes(ProductTypeId, ProductType));
                        }

                        ProductTypeId = reader.ReadElementContentAsString().Trim();
                    }

                    if (reader.LocalName == "ProductType")
                    {
                        ProductType = reader.ReadElementContentAsString().Trim();
                    }
                }
            }

            reader.Close();

            productTypes.Sort(cproductTypes);
        }

        static void LoadProductSubTypes()
        {
            String ProductSubtypeId = "";
            String ProductTypeId = "";
            String ProductType = "";

            XmlReader reader = XmlReader.Create("tbl_ProductSubtypes.xml");

            Boolean firstTime = true;

            while (reader.Read())
            {
                if (reader.NodeType == XmlNodeType.Element)
                {
                    if (reader.LocalName == "ProductTypeId")
                    {
                        if (firstTime)
                        {
                            firstTime = false;
                        }
                        else
                        {
                            productSubtypes.Add(new ProductSubtypes(ProductSubtypeId, ProductTypeId, ProductType));
                        }

                        ProductTypeId = reader.ReadElementContentAsString().Trim();
                    }

                    if (reader.LocalName == "ProductSubtypeId")
                    {
                        ProductSubtypeId = reader.ReadElementContentAsString().Trim();
                    }

                    if (reader.LocalName == "ProductType")
                    {
                        ProductType = reader.ReadElementContentAsString().Trim();
                    }
                }
            }

            reader.Close();

            productSubtypes.Sort(cproductSubtypes);
        }

        static void LoadTCDSRevisions()
        {
            String TcdsRevisionId = "";
            String TcdsId = "";
            String OfficeId = "";
            String TcdsHolderId = "";

            XmlReader reader = XmlReader.Create("tbl_TcdsRevisions.xml");

            Boolean firstTime = true;

            while (reader.Read())
            {
                if (reader.NodeType == XmlNodeType.Element)
                {
                    if (reader.LocalName == "TcdsRevisionId")
                    {
                        if (firstTime)
                        {
                            firstTime = false;
                        }
                        else
                        {
                            tcdsRevisions.Add(new TCDSRevisions(TcdsRevisionId, TcdsId, OfficeId, TcdsHolderId));
                        }

                        TcdsRevisionId = reader.ReadElementContentAsString().Trim();
                    }

                    if (reader.LocalName == "TcdsId")
                    {
                        TcdsId = reader.ReadElementContentAsString().Trim();
                    }

                    if (reader.LocalName == "OfficeId")
                    {
                        OfficeId = reader.ReadElementContentAsString().Trim();
                    }

                    if (reader.LocalName == "TcdsHolderId")
                    {
                        TcdsHolderId = reader.ReadElementContentAsString().Trim();
                    }
                }
            }

            reader.Close();

            tcdsRevisions.Sort(ctcdsRevisions);
        }

        static void LoadTCDS()
        {
            String TcdsId = "";
            String TcdsNumber = "";

            XmlReader reader = XmlReader.Create("tbl_Tcds.xml");

            Boolean firstTime = true;

            while (reader.Read())
            {
                if (reader.NodeType == XmlNodeType.Element)
                {
                    if (reader.LocalName == "TcdsId")
                    {
                        if (firstTime)
                        {
                            firstTime = false;
                        }
                        else
                        {
                            tcds.Add(new TCDS(TcdsId, TcdsNumber));
                        }

                        TcdsId = reader.ReadElementContentAsString().Trim();
                    }

                    if (reader.LocalName == "TcdsNumber")
                    {
                        TcdsNumber = reader.ReadElementContentAsString().Trim();
                    }
                }
            }

            reader.Close();

            tcds.Sort(ctcds);
        }

        static void Main(string[] args)
        {
            LoadHolderNames();

            LoadProductTypes();

            LoadProductSubTypes();

            LoadTCDSRevisions();

            LoadTCDS();

            XmlReader reader = XmlReader.Create("tbl_ModelsToRevisions.xml");

            Boolean firstTime = true;

            while (reader.Read())
            {
                if(reader.NodeType == XmlNodeType.Element)
                {
                    if (reader.LocalName == "ModelId")
                    {
                        if (firstTime)
                        {
                            firstTime = false;
                        }
                        else
                        {
                            WriteRecord();
                        }

                        ModelId = reader.ReadElementContentAsString().Trim();
                    }

                    if (reader.LocalName == "TcdsRevisionId")
                    {
                        TcdsRevisionId = reader.ReadElementContentAsString().Trim();
                    }

                    if (reader.LocalName == "Model")
                    {
                        Model = reader.ReadElementContentAsString().Trim();
                    }

                    if (reader.LocalName == "ProductSubtypeId")
                    {
                        ProductSubtypeId = reader.ReadElementContentAsString().Trim();
                    }
                }
            }

            reader.Close();

            finalTable.Sort();

            String prevEntry = "";

            foreach(String entry in finalTable)
            {
                if (String.Compare(entry, prevEntry) != 0)
                {
                    sw.WriteLine(entry);

                    prevEntry = entry;
                }
            }
            
            sw.Close();
        }

        static void WriteRecord()
        {
            String TcdsId = "";
            String TcdsHolderId = "";
            String TcdsNumber = "";
            String HolderName = "";

            TCDSRevisions tr = new TCDSRevisions(TcdsRevisionId, null, null, null);

            int br = tcdsRevisions.BinarySearch(tr, ctcdsRevisions);

            if (br >= 0)
            {
                TcdsId = tcdsRevisions[br].TcdsId;
                
                TcdsHolderId = tcdsRevisions[br].TcdsHolderId;

                TCDS tds = new TCDS(tcdsRevisions[br].TcdsId, null);

                br = tcds.BinarySearch(tds, ctcds);

                if (br >= 0)
                {
                    TcdsNumber = tcds[br].TcdsNumber;
                }
            }

            HolderNames hn = new HolderNames(TcdsHolderId, null);

            br = holderNames.BinarySearch(hn, cholderNames);

            if (br >= 0)
            {
                HolderName = holderNames[br].TcdsHolder;
            }

            String record = new String(System.Text.Encoding.ASCII.GetChars(System.Text.Encoding.ASCII.GetBytes(HolderName.ToCharArray()))) + 
                "~" + new String(System.Text.Encoding.ASCII.GetChars(System.Text.Encoding.ASCII.GetBytes(Model.ToCharArray()))) + 
                "~" + TcdsNumber;

            if (HolderName.Length > 0)
            {
                finalTable.Add(record);
            }
        }

    }
}
