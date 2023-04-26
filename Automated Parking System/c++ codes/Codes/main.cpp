/*
#include <iostream>
#include<cstring>
#include "Customer.h"
using namespace std;
int main()
{

cout<<"Unregistered Customers " <<endl<<endl;

Unregistered_customer UC1("Kavin", "kavin@yahoo.com",   "0717777770", "11111"); UC1.displayunregDetails();

Unregistered_customer UC2("Prasa", "prasa@gmail.com", "0717777770", "22222");

  
UC2.displayunregDetails();

Unregistered_customer UC3("Asmi", "asmi@yahoo.com", "0776543210", "33333");

  
UC3.displayunregDetails();

Unregistered_customer UC4("Nandun", "Nandun@hotmail.com", "0767865432", "44444");

UC4.displayunregDetails();
cout<<"Registered Customers " <<endl<<endl;

Registered_customer RC1("RG001", "kamal@yahoo.com", "zxcv8n7", 100.00); RC1.displayregDetails();

Registered_customer RC2("RG002", "nimal@gmail.com", "as3h6gf", 150.00 ); RC2.displayregDetails();

Registered_customer RC3("RG003", "sunil@gmail.com", "qwe6rty", 100.00); RC3.displayregDetails();

Registered_customer RC4("RG004", "gayan@hotmail.com", "wsde5rf", 125.00);

  RC4.displayregDetails();
}
*/

 /*
//Feedback codes
#include <iostream>
#include "Feedback.h"
#include "Inquiry.h"
using namespace std;
int main()
{
Feedback fb;

fb.feedback(17, (char*)"Saman Perera", (char*)"samanPerera@gmail.com", (char*)"Great Solution"); //Create Feedback object

fb.displayFeedback(); //Display Feedback
cout << "\n" << endl;

Inquiry inq;

inq.enquire((char*)"Dasun Nethsara", 717128328, (char*)"Nethsara@gmail.com", (char*)"Change Password"); //Create Inquiry object

inq.displayEnquire(); //Display Inquiry

return 0;
}
*/

/*
//Pay & Location codes

#include<iostream>
#include<cstring>
#include"Payment.h"
#include"ParkLocation.h"
using namespace std;
int main()
{
Payment pay;
pay.payment(12,(char*)"PayPal",(char*)"Done"); pay.displayPaymentDetails();

  cout<<"--------------------------------"<<endl;

ParkLocation parkL;

parkL.parkLocation(0001,(char*)"NugegodaPark", (char*)"Nugegoda Highlevel Rd, Nugegoda", 500.00);

  parkL.displayLocationDetails();

  return 0;
}
*/


//Admin & Report codes
#include <iostream>
#include <cstring>
#include "Admin.h"
#include "Report.h"
using namespace std;
int main() {
Report rpNo;

rpNo.Reports(4197392, (char*)"CUSTOMR REPORTS"); rpNo.displayReport();

cout << "\n" << endl;
cout << "--------------------------------" << endl;

Admin ADNo;
ADNo.Admins(4, (char*)"Nimal");
ADNo.displayAdmin();

cout << "\n" << endl;
cout << "--------------------------------" << endl;

}


