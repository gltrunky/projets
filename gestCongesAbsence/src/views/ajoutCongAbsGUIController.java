package views;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.scene.control.ChoiceBox;
import javafx.scene.control.ListView;

import java.util.ArrayList;

public class ajoutCongAbsGUIController {

    private models.ajoutCongAbsModel modele = new models.ajoutCongAbsModel();

    //Observable choice box
    ObservableList<String> motif = FXCollections.observableArrayList("CP", "ABS", "RTT");
    //choicebox
    @FXML
    private ChoiceBox motifBox;

    @FXML
    private void initialize (){
        ArrayList<String> list_prenoms = modele.getPrenoms();

        for(int i = 0; i< list_prenoms.size(); i++)
        {
            list.add(list_prenoms.get(i));
        }

        listemploye.setItems(list);
        motifBox.setValue("CP");
        motifBox.setItems(motif);
    }

    //Observable listViews
    @FXML
    private ObservableList<String> list = FXCollections.observableArrayList();
    //listViews
    @FXML
    private ListView listemploye;

}
