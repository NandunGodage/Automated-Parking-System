#include <iostream>
#include<cstring>
#include "Customer.h"
using namespace std;


Customer::Customer(char const pname[], char const pemail[], char const pnum[], char const pcode[]){

strcpy( name,pname);
strcpy( email, pemail);
strcpy ( num, pnum);
strcpy (code, pcode);
}


void Customer::displayDetails(){

cout<< name <<endl;
cout<< email <<endl;
cout<< num <<endl;
cout<< code <<endl;
cout<<endl;
}


Unregistered_customer::Unregistered_customer(char const pname[],char const pemail[],char const pnum[],char const pcode[]){


strcpy( name,pname);
strcpy( email, pemail);
strcpy ( num, pnum);
strcpy (code, pcode);
};



void Unregistered_customer::displayunregDetails(){

cout<<"Name: "<< name <<endl;
cout<<"Email Address" <<email <<endl;
cout<<"Phone Number: "<< num <<endl;
cout<<"Postal Code: "<< code <<endl;
cout<<endl;
}




Registered_customer::Registered_customer(char const ID[], char const pemail[],char const ppw[], float disc){

strcpy( userID,ID);
strcpy( email, pemail);
strcpy ( password, ppw);

  discount= disc;
};


void Registered_customer::displayregDetails(){

cout<<"User ID: "<< userID <<endl;
cout<<"Email Address: "<< email <<endl;
cout<<"Password: "<< password <<endl;
cout<<"Discount Amount: Rs."<< discount <<endl;
cout<<endl;
}
