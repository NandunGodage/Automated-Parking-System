#include "Report.h"
#include <iostream>
#include <cstring>
using namespace std;

void Report::Reports(int rpNo, char reportName[])
{
int ReportNo = rpNo;

  strcpy(name, reportName);
}

void Report::displayReport()
{
cout << "Report No : " << ReportNo << endl;
cout << "Report Name : " << name << endl;

}
