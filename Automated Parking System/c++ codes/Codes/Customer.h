class Customer {
protected: char name[20];
char email[30];
char num[11];
char code[5];

public: void setDetails(char const pname, char const pemail,char const pnum, char const pcode);

char getDetails();

Customer() {}
Customer(char const pname[], char const pemail[], char const pnum[], char const pcode[]);

void displayDetails();
};


class Unregistered_customer: public Customer{
private: char userID[6];

public:Unregistered_customer( char const pname[], char const pemail[],char const pnum[],char const pcode[]);

void displayunregDetails();
char getDetails();
};


class Registered_customer: public Customer{
private: char userID[6];
char password[8];
float discount;
public:Registered_customer(char const ID[],char const pemail[], char const ppw[], float disc);

void displayregDetails();
char getDetails();
};
