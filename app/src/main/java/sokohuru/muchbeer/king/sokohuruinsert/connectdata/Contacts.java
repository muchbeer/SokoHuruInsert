package sokohuru.muchbeer.king.sokohuruinsert.connectdata;

/**
 * Created by muchbeer on 6/25/2015.
 */


//this class enable to maintain single contact as an object using getter and setter
public class Contacts {

    //private variables
    int User_Id;
    String item;
    String price;

    //Empty Constructor
    public Contacts() {

    }

    //constructor
    public Contacts(int User_Id, String item, String price) {
        this.User_Id = User_Id;
        this.item=item;
        this.price=price;
    }

    //constructor
    public Contacts(String item , String price) {
        this.item=item;
        this.price=price;

    }

    //getting ID
    public int getUser_Id() {
        return  this.User_Id;
    }

    //setting id
    public void setUser_Id(int User_Id) {
        this.User_Id = User_Id;
    }

    //getting name
    public String getItem() {
        return this.item;
    }

    //setting name
    public void setItem(String item) {
        this.item=item;
    }

    //getting price
    public String getPrice() {
        return this.price;
    }

    public void setPrice(String price) {
        this.price=price;
    }
}

