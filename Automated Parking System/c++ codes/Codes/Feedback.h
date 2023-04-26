class Feedback
{
private:
int feedbackNo;
char name[25];
char email[50];
char feedbackMsg[100];

public:
void feedback(int fbNo, char userName[], char userEmail[], char
addFeedback[]);

void displayFeedback();
};
