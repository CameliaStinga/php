<?php
class Client
{
    //attributs 
    public $last_name;
    public $first_name;
    public $email;
    public $address;
    public $postcode;
    public $city;
//constructeur 
    public function __construct($last_name, $first_name, $email, $address, $postcode, $city)
    {
        $this->last_name = $last_name;
        $this->first_name = $first_name;
        $this->email = $email;
        $this->address = $address;
        $this->postcode = $postcode;
        $this->city = $city;
    }
//fonction pour afficher le client avec ses coordonnées
    public function displayClient()
    {

?>
        <table class="table">

            <tr>
                <td colspan="2">
                    <strong align="center"> Client </strong>
                </td>
            </tr>

            <tr>
                <td align="left">
                    <p>Last_name</p>
                </td>

                <td align="left">
                    <p>First_name </p>
                </td>
                <td align="left">
                    <p>Email</p>
                </td>
                <td align="left">
                    <p>Address</p>
                </td>
                <td align="left">
                    <p>Postcode</p>
                </td>
                <td align="left">
                    <p>City</p>
                </td>

            </tr>

            <tr>

                <td> <?php echo " $this->last_name"; ?></td>
                <td> <?php echo " $this->first_name"; ?></td>
                <td> <?php echo " $this->email"; ?></td>
                <td> <?php echo " $this->address"; ?></td>
                <td> <?php echo " $this->postcode"; ?></td>
                <td> <?php echo " $this->city"; ?></td>
                
            </tr>


        </table>
<?php
    }
} ?>

