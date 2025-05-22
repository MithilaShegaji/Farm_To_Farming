package FarmRegisteration;

        import FarmRegisteration.Farm;

        import java.sql.SQLException;
        import java.util.ArrayList;
        import java.util.Scanner; //nested package/ hierarchical package


public class FarmDemo {

    public static void main(String[] args) throws SQLException {
        String cancel_name;
        FarmDAO farmdao = new FarmDAO();
        farmdao.displayFarmInfo();
        try {
            farmdao.displayFarmInfo();

            int userOpt = 1;
            Scanner scanner = new Scanner(System.in);


            while(userOpt==1) {
                System.out.println("Enter 1 Register as farmer ,2 Register Land");
                userOpt = scanner.nextInt();
                if(userOpt == 1) {
                    Booking booking = new Registeraiton();
                    if(registeraiton.isAvailable()) {
                        RegisterationDAO registerationdao = new RegisterationDAO();
                        registerationdao.addRegisteration(registeration);
                        System.out.println("Land Registered succefully");
                    }
                    else
                        System.out.println("Sorry. Land is already registered.");
                }
                else if(userOpt==2){
                    System.out.println("Enter your Land details:");
                    cancel_name=scanner.next();
                    farmdao.delete(cancel_name);
                }
            }
            scanner.close();
        }
        catch(Exception e) {
            System.out.println(e);
        }
    }

}