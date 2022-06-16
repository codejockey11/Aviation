using System;
using System.IO;
using System.Collections.Generic;
using aviationLib;

namespace FsxWaypointMaker
{
    class Program
    {
        static Int32 count = 0;

        static List<String> fsxWaypoints = new List<String>();

        static StreamReader sr = new StreamReader("fsxWaypoints.txt");
        static String rec;

        static StreamWriter sw = new StreamWriter("fsxWaypoints.xml");

        static void ProcessRec(String rec)
        {
            String[] col = rec.Split('~');

            Int32 index = fsxWaypoints.BinarySearch(col[0]);

            if (index >= 0)
            {
            }
            else
            {
                String state = col[1];
                String region = col[2];
                String latitude = col[3];
                String longitude = col[4];
                String magvar = col[5];
                String category = col[6];
                String fixusage = col[7];
                String nasId = col[8];
                String highArtcc = col[9];
                String lowArtcc = col[10];

                if ((magvar != "") && (col[0].Length < 6))
                {
                    LatLon ll = new LatLon(latitude, longitude);

                    sw.Write("<Waypoint\r\n");
                    sw.Write("\tlat=\"" + ll.formattedLatFSX + "\"\r\n");
                    sw.Write("\tlon=\"" + ll.formattedLonFSX + "\"\r\n");
                    sw.Write("\twaypointType=\"NAMED\"\r\n");
                    sw.Write("\tmagvar=\"" + magvar + "\"\r\n");
                    sw.Write("\twaypointRegion=\"" + region + "\"\r\n");
                    sw.Write("\twaypointIdent=\"" + col[0] + "\">\r\n");
                    sw.Write("</Waypoint>\r\n");

                    count++;

                    Console.Write(count.ToString("D5"));
                    Console.Write("\r");
                }

            }
        }

        static void Main(String[] args)
        {
            rec = sr.ReadLine();
            while (!sr.EndOfStream)
            {
                fsxWaypoints.Add(rec);
                rec = sr.ReadLine();
            }

            fsxWaypoints.Add(rec);
            sr.Close();

            sr = new StreamReader("fsxfix.txt");

            sw.Write("<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>\r\n");
            sw.Write("<FSData version=\"9.0\"\r\n");
            sw.Write("xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' xsi:noNamespaceSchemaLocation=\"bglcomp.xsd\">\r\n");

            rec = sr.ReadLine();
            while (!sr.EndOfStream)
            {
                ProcessRec(rec);
                rec = sr.ReadLine();
            }

            ProcessRec(rec);

            sw.Write("</FSData>\r\n");
            sw.Close();

            sr.Close();

        }
    }

}
