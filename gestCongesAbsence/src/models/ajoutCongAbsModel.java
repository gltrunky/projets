package models;

import java.sql.*;
import java.util.ArrayList;

public class ajoutCongAbsModel {


    Connection conn;

    public ajoutCongAbsModel() {
        // TODO Auto-generated constructor stub

    }

    public void connectDatabase()
    {
        try
        {
            String url = "jdbc:mysql://localhost/gestconge?useUnicode=true&useJDBCCompliantTimezoneShift=true&useLegacyDatetimeCode=false&serverTimezone=UTC";
            conn = DriverManager.getConnection(url, "root", "");
        }
        catch (SQLException ex)           {System.err.println(ex.getMessage());}
    }

    public void closeConnection()
    {
        try {
            conn.close();
        } catch (SQLException e) {
            // TODO Auto-generated catch block
            e.printStackTrace();
        }
    }

    public ArrayList<String> getPrenoms()
    {
        // Etape 1 - Connexion à la BDD
        connectDatabase();
        ArrayList<String> prenoms = new ArrayList<String>();

        try
        {
            // Etape 2: Création d'un statement
            Statement st = conn.createStatement();

            // Etape 3: Exécution requete
            ResultSet rs = st.executeQuery("SELECT * FROM employes");

            //Etape 4: traitement du résultat
            while (rs.next())
            {
                prenoms.add(rs.getString("Prenom"));
            }


        }
        catch (SQLException ex)           {System.err.println(ex.getMessage());}

        //Etape 5: Core les connexions
        closeConnection();
        return prenoms;
    }

    public String getData(String prenom)
    {
        // Etape 1 - Connexion à la BDD
        connectDatabase();

        String info = "Prenom = " + prenom + ",";

        try
        {

            // Etape 2: Création d'un statement
            Statement st = conn.createStatement();

            // Etape 3: Exécution requete
            ResultSet rs = st.executeQuery("SELECT * FROM employes where prenom = '" + prenom + "'");

            //Etape 4: traitement du résultat
            while (rs.next())
            {
                info += " Nom = " + rs.getString("Nom") + ",";

            }

        }
        catch (SQLException ex)           {System.err.println(ex.getMessage());}

        //Etape 5: Core les connexions
        closeConnection();

        return info;

    }

}
