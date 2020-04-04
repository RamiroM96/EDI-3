#include <iostream>

using namespace std;

int main()
{
    char texto [100]; 
    
    
    cout <<"digite un texto:"; 
    cin.getline(texto,100,'\n') ; 
    
    cout<<"tu texto es:\n"<<texto; 

    return 0;
}
