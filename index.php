<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.13/fc-3.2.2/fh-3.1.2/r-2.1.0/sc-1.4.2/datatables.min.css" />
    <title>Document</title>
</head>
<body>

<?php
session_start();
if(isset($_SESSION['username'])) {
    if ($_SESSION['role']=='responsable'){?>

<div class="row">
<nav class="navbar navbar_v justify-content-between flex-nowrap" style="background:#22262F;border:none;position:; ;width:100% !important; z-index:5;">
<a class="navbar-brand" href="#">
    <img src="assets/imgs/general-icon.png" width="40" height="40" class="d-inline-block align-top" alt="">
    <span class="nav-text" style="font-family:'Titillium Web'"> PUERTO TRANSIT </span>
  </a>
  <div class="dropdown mr-5" style="padding-left: 0 100px">
  <button class="btn btn-secondary dropdown-toggle" style='background:none;border : none;'type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img src="assets/imgs/default_login.png" alt=""> 
    <span class="user_id" style="color : #8391A3;"><?php echo $_SESSION['username'];?></span>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" ">
    <a class="dropdown-item hover-drop" href="#" ">LOGOUT <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
  </div>
</div>
</nav>
</div>

<div class="area" ></div>
<nav class="main-menu" style="z-index:1;flex-nowrap">
            <ul>
                <li>
                    <a href="http://justinfarrow.com">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Dashboard
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="#">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            Stars Components
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Forms
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Pages
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                            Graphs and Statistics
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-font fa-2x"></i>
                        <span class="nav-text">
                           Quotes
                        </span>
                    </a>
                </li>
                <li>
                   <a href="#">
                       <i class="fa fa-table fa-2x"></i>
                        <span class="nav-text">
                            Tables
                        </span>
                    </a>
                </li>
                <li>
                   <a href="#">
                        <i class="fa fa-map-marker fa-2x"></i>
                        <span class="nav-text">
                            Maps
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                       <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            Documentation
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="#">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
<div class="boxParent" style="margin: 10px 90px;">
    <h1 class="txt-header">Ajouter des Employés</h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Ajouter </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter des Employés</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
          <h5 class="modal-title modal-title-text" id="exampleModalLabel">Information Personnel</h5>
            <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Mattricule:</label>
                <input type="text" class="form-control" placeholder="..." id="recipient-name">
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Nom:</label>
                <input type="text" class="form-control" placeholder="..." id="recipient-name">
              </div><!--  row end -->
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Prénom:</label>
                <input type="text" class="form-control" placeholder="..." id="recipient-name">
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Email:</label>
                <input type="text" class="form-control" placeholder="..." id="recipient-name">
              </div>
            </div><!--  row end -->
            <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">CIN:</label>
                <input type="text" class="form-control" placeholder="..." id="recipient-name">
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Date d'embauche:</label>
                <input type="date" class="form-control" placeholder="..." id="recipient-name">
              </div>
            </div><!--  row end -->
            <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Address:</label>
                <input type="text" class="form-control" placeholder="..." id="recipient-name">
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Photo:</label>
                <input type="file" class="form-control" placeholder="..." id="recipient-name">
                </div> <!--  row end -->
          </div>
          <h5 class="modal-title modal-title-text" id="exampleModalLabel">Information Contact</h5>
          <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Numero (Portable) : </label>
                <input type="phone" class="form-control" placeholder="..." id="recipient-name">
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Numero d’extention : </label>
                <input type="phone" class="form-control" placeholder="..." id="recipient-name">
              </div>
            </div><!--  row end -->
            <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Fix direct : </label>
                <input type="phone" class="form-control" placeholder="..." id="recipient-name">
              </div>
            </div><!--  row end -->
            <h5 class="modal-title modal-title-text" id="exampleModalLabel">Information Personnel</h5>
            <h5 class="modal-title modal-title-text" id="exampleModalLabel">Information Contact</h5>
          <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Département : </label>
                <input type="text" class="form-control" placeholder="..." id="recipient-name">
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Fonction : </label>
                <input type="text" class="form-control" placeholder="..." id="recipient-name">
              </div>
          </div><!--  row end -->
          <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Résponsable : </label>
                <select class="form-select" aria-label="Default select example">
                  <option selected disabled>Selectionner un responsable</option>
                  <option value="It">IT</option>
                  <option value="Rh">RH</option>
                  <option value="Finance">Finance</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Bureaux : </label>
                <input type="text" class="form-control" placeholder="..." id="recipient-name">
              </div>
          </div><!--  row end -->
          <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Post : </label>
                <input type="text" class="form-control" placeholder="..." id="recipient-name">
              </div>
          </div><!--  row end -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
        </div>
      </div>
      </div>
     </div> <!-- modal End -->
   
     <table id="tab" class="table table-striped stripe row-border order-column" cellspacing="3" width="100%">
        <thead>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>Extn.</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger</td>
                <td>Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>5421</td>
                <td>t.nixon@datatables.net</td>
            </tr>
            <tr>
                <td>Garrett</td>
                <td>Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
                <td>8422</td>
                <td>g.winters@datatables.net</td>
            </tr>
            <tr>
                <td>Ashton</td>
                <td>Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
                <td>1562</td>
                <td>a.cox@datatables.net</td>
            </tr>
            <tr>
                <td>Cedric</td>
                <td>Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
                <td>6224</td>
                <td>c.kelly@datatables.net</td>
            </tr>
            <tr>
                <td>Airi</td>
                <td>Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
                <td>5407</td>
                <td>a.satou@datatables.net</td>
            </tr>
            <tr>
                <td>Brielle</td>
                <td>Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
                <td>4804</td>
                <td>b.williamson@datatables.net</td>
            </tr>
            <tr>
                <td>Herrod</td>
                <td>Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
                <td>9608</td>
                <td>h.chandler@datatables.net</td>
            </tr>
            <tr>
                <td>Rhona</td>
                <td>Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>$327,900</td>
                <td>6200</td>
                <td>r.davidson@datatables.net</td>
            </tr>
            <tr>
                <td>Colleen</td>
                <td>Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
                <td>$205,500</td>
                <td>2360</td>
                <td>c.hurst@datatables.net</td>
            </tr>
            <tr>
                <td>Sonya</td>
                <td>Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008/12/13</td>
                <td>$103,600</td>
                <td>1667</td>
                <td>s.frost@datatables.net</td>
            </tr>
            <tr>
                <td>Jena</td>
                <td>Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>2008/12/19</td>
                <td>$90,560</td>
                <td>3814</td>
                <td>j.gaines@datatables.net</td>
            </tr>
            <tr>
                <td>Quinn</td>
                <td>Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2013/03/03</td>
                <td>$342,000</td>
                <td>9497</td>
                <td>q.flynn@datatables.net</td>
            </tr>
            <tr>
                <td>Charde</td>
                <td>Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>2008/10/16</td>
                <td>$470,600</td>
                <td>6741</td>
                <td>c.marshall@datatables.net</td>
            </tr>
            <tr>
                <td>Haley</td>
                <td>Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td>2012/12/18</td>
                <td>$313,500</td>
                <td>3597</td>
                <td>h.kennedy@datatables.net</td>
            </tr>
            <tr>
                <td>Tatyana</td>
                <td>Fitzpatrick</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>19</td>
                <td>2010/03/17</td>
                <td>$385,750</td>
                <td>1965</td>
                <td>t.fitzpatrick@datatables.net</td>
            </tr>
           
            <tr>
                <td>Cara</td>
                <td>Stevens</td>
                <td>Sales Assistant</td>
                <td>New York</td>
                <td>46</td>
                <td>2011/12/06</td>
                <td>$145,600</td>
                <td>3990</td>
                <td>c.stevens@datatables.net</td>
            </tr>
            <tr>
                <td>Hermione</td>
                <td>Butler</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>47</td>
                <td>2011/03/21</td>
                <td>$356,250</td>
                <td>1016</td>
                <td>h.butler@datatables.net</td>
            </tr>
            <tr>
                <td>Lael</td>
                <td>Greer</td>
                <td>Systems Administrator</td>
                <td>London</td>
                <td>21</td>
                <td>2009/02/27</td>
                <td>$103,500</td>
                <td>6733</td>
                <td>l.greer@datatables.net</td>
            </tr>
            <tr>
                <td>Jonas</td>
                <td>Alexander</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td>30</td>
                <td>2010/07/14</td>
                <td>$86,500</td>
                <td>8196</td>
                <td>j.alexander@datatables.net</td>
            </tr>
            <tr>
                <td>Shad</td>
                <td>Decker</td>
                <td>Regional Director</td>
                <td>Edinburgh</td>
                <td>51</td>
                <td>2008/11/13</td>
                <td>$183,000</td>
                <td>6373</td>
                <td>s.decker@datatables.net</td>
            </tr>
            <tr>
                <td>Michael</td>
                <td>Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
                <td>29</td>
                <td>2011/06/27</td>
                <td>$183,000</td>
                <td>5384</td>
                <td>m.bruce@datatables.net</td>
            </tr>
            <tr>
                <td>Donna</td>
                <td>Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>2011/01/25</td>
                <td>$112,000</td>
                <td>4226</td>
                <td>d.snider@datatables.net</td>
            </tr>
        </tbody>
    </table>




  </div> <!-- Parent Box End -->






<?php
    }else {
        header('Location:login.php');
    }
}else {
    echo '403 ,Frobidden !';
    header('Location:login.php');
}
?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.2/js/dataTables.fixedColumns.min.js"></script>
    <script type="text/javascript">
$(document).ready(function() {
    var table = $('#tab').DataTable( {
        scrollY:        "400px",
        scrollX:        true,
        scrollCollapse: false,
        paging:         false,
        fixedColumns:   {
            leftColumns: 1,
        }
    } );
});
</script>
</body>
<html>