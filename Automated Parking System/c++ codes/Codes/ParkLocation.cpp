#include<iostream>
#include<cstring>
#include"ParkLocation.h"
using namespace std;

void ParkLocation::parkLocation(int pLocation_ID, char pLocation_Name[], char
pDetails[], double pPrice)
{

Location_ID = pLocation_ID;
strcpy(Location_Name, pLocation_Name);
strcpy(Details, pDetails);
Price = pPrice;
}

void ParkLocation::addLocation()
{

}

void ParkLocation::displayLocationDetails()
{
cout<<"Location ID: "<<Location_ID<<endl;
cout<<"Location Name: "<<Location_Name<<endl;
cout<<"Details: "<<Details<<endl;
cout<<"Price: "<<Price<<endl;

}
