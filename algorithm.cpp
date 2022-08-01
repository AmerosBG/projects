#include <iostream>
using namespace std;
void getBitmask(int universalSet[], int universalSetSize, int subSet[], int subSetSize, bool* bitMask) {
    for (int j = 0; j < subSetSize; ++j) {
        int subSetElement = subSet[j];
        for (int i = 0; i < universalSetSize; ++i) {
            int universalElement = universalSet[i];
            if (subSetElement == universalElement) {
                bitMask[i] = true;
            }
        }
    }
}

bool isSubset(int bSet[], int bSetSize, int aSet[], int aSetSize) {
    bool* bitMask = new bool[bSetSize];
    getBitmask(aSet, aSetSize, bSet, bSetSize, bitMask);
    for (int i = 0; i < aSetSize; ++i) {
        if (!bitMask[i]) {
            return false;
        }
    }

    return true;
}


int main() {

    int aSet[11] = {1, 2, 3, 4, 5, 6, 7, 8, 9, 10};
    int bSet[5] = {2, 3, 5, 6, 7};
    int cSet[2] = {3, 5};
    int dSet[2] = {1, 2};
    int eSet[1] = {1};

    cout << "A subset B: " << (isSubset(aSet, 11, bSet, 5) ? "yes" : "no") << endl;
    cout << "A subset C: " << (isSubset(aSet, 11, cSet, 2) ? "yes" : "no") << endl;
    cout << "A subset D: " << (isSubset(aSet, 11, dSet, 2) ? "yes" : "no") << endl;
    cout << "A subset E: " << (isSubset(aSet, 11, eSet, 1) ? "yes" : "no") << endl;

    cout << "B subset C: " << (isSubset(bSet, 5, cSet, 2) ? "yes" : "no") << endl;
    cout << "B subset D: " << (isSubset(bSet, 5, dSet, 2) ? "yes" : "no") << endl;
    cout << "B subset E: " << (isSubset(bSet, 5, eSet, 1) ? "yes" : "no") << endl;

    cout << "C subset D: " << (isSubset(cSet, 2, dSet, 2) ? "yes" : "no") << endl;
    cout << "C subset E: " << (isSubset(cSet, 2, eSet, 1) ? "yes" : "no") << endl;

    cout << "D subset E: " << (isSubset(dSet, 2, eSet, 1) ? "yes" : "no") << endl;
}