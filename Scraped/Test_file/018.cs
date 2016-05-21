using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MultipleInterfaceExp
{
    interface IRectInterface
    {
        void dispArea();
    }

    interface ITriInterface
    {
        void dispArea();
    }
    
    class MultipleInterfaceExp : IRectInterface, ITriInterface
    {
        float l, b;
        public MultipleInterfaceExp(float x, float y)
        {
            l = x;
            b = y;
        }

        void IRectInterface.dispArea()
        {
            Console.WriteLine("The area of the rectangle is : {0}", l * b);
        }

        void ITriInterface.dispArea()
        {
            Console.WriteLine("The area of the triangle is : {0}", (float)1 / 2 * l * b);
        }
    }

    class Program
    {
        static void Main(string[] args)
        {
            MultipleInterfaceExp multIExp = new MultipleInterfaceExp(10.0f  , 20.0f);
            IRectInterface rectint = (IRectInterface)multIExp;
            ITriInterface triint = (ITriInterface)multIExp;
            rectint.dispArea();
            triint.dispArea();
            Console.ReadLine();

        }
    }
}
