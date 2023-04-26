class ParkLocation {
private:
int Location_ID;
char Location_Name[20];
char Details[25];
double Price;

public:
void parkLocation(int pLocation_ID, char pLocation_Name[], char pDetails[], double pPrice);
void addLocation();
void displayLocationDetails();
void deleteLocation();
void searchLocation();
};
