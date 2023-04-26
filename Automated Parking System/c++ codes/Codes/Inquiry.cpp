#include "Inquiry.h"
#include <iostream>
#include <cstring>
using namespace std;

// Assign User Details and Inquiry Details
void Inquiry::enquire(char username[], int cNo, char useremail[], char addEnq[]){

strcpy(uName, username);

int	contactNo = cNo;
strcpy(uEmail, useremail);
strcpy(addEnquire, addEnq);
}

// Display User Details and Inquiry Details
void Inquiry::displayEnquire(){

cout << "Customer Name : " << uName << endl;
cout << "Contact Number : " << contactNo << endl;
cout << "Email : " << uEmail << endl;
cout << "Inquiry : " << addEnquire << endl;
}
