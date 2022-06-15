using System;
using System.Runtime.InteropServices;

namespace aviationLib
{
    public struct MAGtype_GeoMagneticElements
    {
        public double Decl; /* 1. Angle between the magnetic field vector and true north, positive east*/
        public double Incl; /*2. Angle between the magnetic field vector and the horizontal plane, positive down*/
        public double F; /*3. Magnetic Field Strength*/
        public double H; /*4. Horizontal Magnetic Field Strength*/
        public double X; /*5. Northern component of the magnetic field vector*/
        public double Y; /*6. Eastern component of the magnetic field vector*/
        public double Z; /*7. Downward component of the magnetic field vector*/
        public double GV; /*8. The Grid Variation*/
        public double Decldot; /*9. Yearly Rate of change in declination*/
        public double Incldot; /*10. Yearly Rate of change in inclination*/
        public double Fdot; /*11. Yearly rate of change in Magnetic field strength*/
        public double Hdot; /*12. Yearly rate of change in horizontal field strength*/
        public double Xdot; /*13. Yearly rate of change in the northern component*/
        public double Ydot; /*14. Yearly rate of change in the eastern component*/
        public double Zdot; /*15. Yearly rate of change in the downward component*/
        public double GVdot; /*16. Yearly rate of change in grid variation*/
    };

    public class Declination
    {
        [DllImport("WMM2015v2.dll", CallingConvention = CallingConvention.Cdecl, CharSet = CharSet.Unicode, EntryPoint = "?GeoMagneticElements@@YAPAUMAGtype_GeoMagneticElements@@MHHMMM@Z")]
        public static extern IntPtr GeoMagneticElements(float sdate, int igdgc, int units, float alt, float latitude, float longitude);

        public MAGtype_GeoMagneticElements e;

        public MAGtype_GeoMagneticElements MagDeclination(float decimalLat, float decimalLon)
        {

            try
            {
                String d = DateTime.Now.Year.ToString("D4") + '.' + DateTime.Now.Day.ToString("D1");

                IntPtr pnt = GeoMagneticElements((float)Convert.ToDouble(d), 1, 3, 0.0f, decimalLat, decimalLon);

                e = Marshal.PtrToStructure<MAGtype_GeoMagneticElements>(pnt);
            }
            catch (System.EntryPointNotFoundException se)
            {
                Console.WriteLine(se.Message);
            }

            return e;
        }
    }
}