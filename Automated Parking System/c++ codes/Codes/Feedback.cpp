#include "Feedback.h"
#include <iostream>
#include <cstring>
using namespace std;

// Assign User Details and Feedback Message
void Feedback::feedback(int fbNo, char userName[], char userEmail[], char addFeedback[]) {

int feedbackNo = fbNo;
  
strcpy(name, userName);
strcpy(email, userEmail);
strcpy(feedbackMsg, addFeedback);
}

// Display User Details and Feedback Message
void Feedback::displayFeedback() {

cout << "Feedback No : " << feedbackNo << endl;
cout << "Customer Name : " << name << endl;
cout << "Email : " << email << endl;
cout << "Feedback : " << feedbackMsg << endl;
}
