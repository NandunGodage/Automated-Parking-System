#include "Admin.h"
#include <iostream>
#include <cstring>
using namespace std;

void Admin::Admins(int ADNo, char ADName[])
{
int AdminID = ADNo;

  strcpy(name, ADName);
}

void Admin::displayAdmin()
{

cout << "ADMIN ID : " << AdminID << endl;
cout << "ADMIN Name : " << name << endl;

}
