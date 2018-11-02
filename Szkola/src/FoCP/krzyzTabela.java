/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package FoCP;

/**
 *
 * @author Maciek
 */
public class krzyzTabela 
{
    int krzyz( int x)
    {
        int y = x;
        int g = y-1;
        int[][] krzyz;
        krzyz = new int[x][y];
        
        for (int r = 0; r<x; r++)
        {
            
            for(int k = 0;k<y;k++)
            {
                
                if(k ==x/2 || r==x/2-1 )
                {
                    krzyz[r][k] = 1;
                } 
                else
                {
                    krzyz[r][k] = 0;
                }
                
                
               System.out.print(krzyz[r][k]);
               if(k == g)
                {
                    System.out.println("");
                }   
            }
        }
     
        
        return 0;
    }
   
}
