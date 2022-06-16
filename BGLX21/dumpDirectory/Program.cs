using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;

namespace dumpDirectory
{
    class Program
    {
        static void Main(string[] args)
        {
            String[] filePaths = Directory.GetFiles(@"C:/Program Files (x86)/Microsoft Games/Microsoft Flight Simulator X/Scenery/", args[0], SearchOption.AllDirectories);
            StreamWriter sw = new StreamWriter("convert.bat");
            foreach (String fp in filePaths)
            {
                String f = fp.Replace('\\', '/');
                String[] ss = f.Split('/');
                String[] s1 = ss[ss.Length - 1].Split('.');
                sw.Write("bglxml.exe -t -m -f \"" + f + "\" \"bgls/" + s1[s1.Length-2] + ".xml\"\r\n");
            }
            sw.Close();
        }
    }
}
