<?php
include('header.php');
?>

<style>
  .pricing__wrapper {
    width: 100%;
    box-shadow: 0px 30px 70px 0px rgb(0 13 49 / 8%);
    position: relative;
    background: #ffffff;
}

@media screen and (max-width: 767px){
.pricing__wrapper{
  width: 100%;
    box-shadow: 0px 30px 70px 0px rgb(0 13 49 / 8%);
    position: relative;
    background: #ffffff;
    overflow: scroll;
}
}


@media screen and (max-width: 991px){
.pricing__wrapper{
  width: 100%;
    box-shadow: 0px 30px 70px 0px rgb(0 13 49 / 8%);
    position: relative;
    background: #ffffff;
    overflow: scroll;
}
}




  /* table {
    border: 2px solid black;
    padding: 60px;
    width: 50% !important;
  } */
  /* .table td {
    padding: 5px !important;
  } */
     
       .customers1 {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
 
}
.table-bordered td{
    border: 0px solid #f2f2f2!important;
}
.customers1 tr{
   border: 0.5px solid #f2f2f2!important; 
}
.customers1 td, .customers1 th {
    border-bottom: 1px solid rgba(9, 21, 36, 0.078);
    align-items: center;
    height: 65px;
    transition: all 0.3s ease-out 0s;
 
}


.customers1 th {
 
    align-items: center;
    background-color: #012970;
    height: 60px;
    color:white;
    border:0px solid !important;
}
 
        
</style>

  
  <div class="page-section pt-5">
    <div class="container">
      <nav aria-label="Breadcrumb">
        <ul class="breadcrumb p-0 mb-0 bg-transparent">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
          <li class="breadcrumb-item active">Second divided from form fish beastr</li>
        </ul>
      </nav>
      <div class="row mt-4">
        <div class="col-md-8">
          <h4><b>1.CHIT SCHEMES</b></h4>
          <h4><span style="color:#6C55F9;">Colorful Chit Funds Private Limited</span> We have a variety of chit plans for the month and week.
            They are all as follows:
          </h4><br>
          <h4> MONTHLY SCHEMES </h4>  
          <h3 class="text-center mb-3">This includes the monthly Auction chit</h3>  
          <div class="adjust pricing__wrapper back-input mb-5">
          <table class="table table-bordered customers1 text-center">
            
              <tr class="customers1">
                <th scope="col">GROUP</th>
                <th scope="col">CHIT VALUE</th>
                <th scope="col">MONTHS</th>
                <th scope="col">MEMBERS</th>
                <th scope="col">MONTHLY<br>SUBSCRIPTION</th>
              </tr>
            <tbody>
              <tr>
                <td scope="row">LC OL</th>
                <td>1,00,000</td>
                <td>20</td>
                <td>20</td>
                <td>5,000</td>
              </tr>
              <tr>
                <td scope="row">LC OL</th>
                <td>1,00,000</td>
                <td>10</td>
                <td>10</td>
                <td>10,000</td>
              </tr>
              <tr>
                <td scope="row">LC TL</th>
                <td>2,00,000</td>
                <td>20</td>
                <td>20</td>
                <td>10,000</td>
              </tr>
              <tr>
                <td scope="row">LC TL</th>
                <td>2,00,000</td>
                <td>10</td>
                <td>10</td>
                <td>20,000</td>
              </tr>
              <tr>
                <td scope="row">LC TL</th>
                <td>3,00,000</td>
                <td>30</td>
                <td>30</td>
                <td>10,000</td>
              </tr>
              <tr>
                <td scope="row">LC TL</th>
                <td>3,00,000</td>
                <td>15</td>
                <td>15</td>
                <td>20,000</td>
              </tr>
              <tr>
                <td scope="row">LC TL</th>
                <td>3,00,000</td>
                <td>12</td>
                <td>12</td>
                <td>25,000</td>
              </tr>
              <tr>
                <td scope="row">LC FL</th>
                <td>5,00,000</td>
                <td>25</td>
                <td>25</td>
                <td>20,000</td>
              </tr>
              <tr>
                <td scope="row">LC FL</th>
                <td>5,00,000</td>
                <td>40</td>
                <td>40</td>
                <td>12,500</td>
              </tr>
              <tr>
                <td scope="row">LC TL</th>
                <td>10,00,000</td>
                <td>40</td>
                <td>40</td>
                <td>25,000</td>
              </tr>
              <tr>
                <td scope="row">LC TL</th>
                <td>20,00,000</td>
                <td>40</td>
                <td>40</td>
                <td>50,000</td>
              </tr>
            </tbody>
          </table>
          </div>
          
          
       <h3 class="text-center mb-3 mt-4" id="chit1l">This includes the monthly fixed  chit</h3>  
       <h5>MONTHLY SCHEME-  20 monts  CHIT VALUE : 1,00,000   GROUP : LC OL</h5>
          <div class="adjust pricing__wrapper back-input mb-5">
          <table class="table table-bordered customers1 text-center">
            
              <tr class="customers1">
                <th scope="col">MONTHS</th>
                <th scope="col">SUBSCRIPTION</th>
                <th scope="col">DIVIDENT</th>
                <th scope="col">PAID UP
                  VALUE
                  </th>
                <!-- <th scope="col">MONTHLY SUBSCRIPTION</th> -->
              </tr>
        
            <tbody>
              <tr>
                <td scope="row">1</th>
                <td>5,000</td>
                <td>-</td>
                <td>5,000</td>
              </tr>
              <tr>
                <td scope="row">2</th>
                <td>5,000</td>
                <td>-</td>
                <td>10,000</td>
               
              </tr>
              <tr>
                <td scope="row">3</th>
                <td>3,750</td>
                <td>1,250</td>
                <td>13,750</td>
                
              </tr>
              <tr>
                <td scope="row">4</th>
                <td>3,750</td>
                <td>1,250</td>
                <td>17,500</td>
                
              </tr>
              <tr>
                <td scope="row">5</th>
                <td>3,750</td>
                <td>1,250</td>
                <td>21,250</td>
                
              </tr>
              <tr>
                <td scope="row">6</th>
                <td>3,750</td>
                <td>1,250</td>
                <td>25,250</td>
                
              </tr>
              <tr>
                <td scope="row">7</th>
                <td>4,000</td>
                <td>1,000</td>
                <td>29,250</td>
                
              </tr>
              <tr>
                <td scope="row">8</th>
                <td>4,000</td>
                <td>1,000</td>
                <td>33,250</td>
                
              </tr>
              <tr>
                <td scope="row">9</th>
                <td>4,000</td>
                <td>1,000</td>
                <td>37,250</td>
                
              </tr>
              <tr>
                <td scope="row">10</th>
                <td>4,000</td>
                <td>1,000</td>
                <td>41,250</td>
                
              </tr>
              <tr>
                <td scope="row">11</th>
                <td>4,250</td>
                <td>750</td>
                <td>45,500</td>
                
              </tr>
              <tr>
                <td scope="row">12</th>
                <td>4,250</td>
                <td>750</td>
                <td>49,750</td>
                
              </tr>
              <tr>
                <td scope="row">13</th>
                <td>4,250</td>
                <td>750</td>
                <td>54,000</td>
                
              </tr>
              <tr>
                <td scope="row">14</th>
                <td>4,250</td>
                <td>750</td>
                <td>58,250</td>
               
              </tr>
              <tr>
                <td scope="row">15</th>
                <td>4,250</td>
                <td>750</td>
                <td>62,500</td>
                
              </tr>
              <tr>
                <td scope="row">16</th>
                <td>4,500</td>
                <td>500</td>
                <td>67,000</td>
                
              </tr>
              <tr>
                <td scope="row">17</th>
                <td>4,500</td>
                <td>500</td>
                <td>71,500</td>
               
              </tr>
              <tr>
                <td scope="row">18</th>
                <td>4,750</td>
                <td>250</td>
                <td>76,250</td>
               
              </tr>
              <tr>
                <td scope="row">19</th>
                <td>4,750</td>
                <td>250</td>
                <td>81,000</td>
               
              </tr>
              <tr>
                <td scope="row">20</th>
                <td>5,000</td>
                <td>-</td>
                <td>86,000</td>
                
              </tr>
            </tbody>
          </table>
          </div>
          
          <h5 class="text-center mb-2 mt-5" id="chit2l">MONTHLY SCHEME-20 monts           CHIT VALUE : 2,00,000           GROUP : LC TL</h5>
           <div class="adjust pricing__wrapper back-input mb-5">
          <table class="table table-bordered customers1 text-center">
            
              <tr class="customers1">
                <th scope="col">MONTHS</th>
                <th scope="col">SUBSCRIPTION</th>
                <th scope="col">DIVIDENT</th>
                <th scope="col">PAID UP
                  VALUE
                  </th>
                <!-- <th scope="col">MONTHLY SUBSCRIPTION</th> -->
              </tr>
            
            <tbody>
              <tr>
                <td scope="row">1</th>
                <td>10,000</td>
                <td>-</td>
                <td>10,000</td>
              </tr>
              <tr>
                <td scope="row">2</th>
                <td>10,000</td>
                <td>-</td>
                <td>20,000</td>
               
              </tr>
              <tr>
                <td scope="row">3</th>
                <td>7,500</td>
                <td>2,500</td>
                <td>27,500</td>
                
              </tr>
              <tr>
                <td scope="row">4</th>
                <td>7,500</td>
                <td>2,500</td>
                <td>35,000</td>
                
              </tr>
              <tr>
                <td scope="row">5</th>
                <td>7,500</td>
                <td>2,500</td>
                <td>42,500</td>
                
              </tr>
              <tr>
                <td scope="row">6</th>
                <td>8,000</td>
                <td>2,000</td>
                <td>50,500</td>
                
              </tr>
              <tr>
                <td scope="row">7</th>
                <td>8,000</td>
                <td>2,000</td>
                <td>58,500</td>
                
              </tr>
              <tr>
                <td scope="row">8</th>
                <td>8,000</td>
                <td>2,000</td>
                <td>66,500</td>
                
              </tr>
              <tr>
                <td scope="row">9</th>
                <td>8,000</td>
                <td>2,000</td>
                <td>74,500</td>
                
              </tr>
              <tr>
                <td scope="row">10</th>
                <td>8,000</td>
                <td>2,000</td>
                <td>82,500</td>
                
              </tr>
              <tr>
                <td scope="row">11</th>
                <td>8,500</td>
                <td>1,500</td>
                <td>91,000</td>
                
              </tr>
              <tr>
                <td scope="row">12</th>
                <td>8,500</td>
                <td>1,500</td>
                <td>99,550</td>
                
              </tr>
              <tr>
                <td scope="row">13</th>
                <td>8,500</td>
                <td>1,500</td>
                <td>1,08,000</td>
                
              </tr>
              <tr>
                <td scope="row">14</th>
                <td>8,500</td>
                <td>1,500</td>
                <td>1,16,500</td>
               
              </tr>
              <tr>
                <td scope="row">15</th>
                <td>8,500</td>
                <td>1,500</td>
                <td>1,25,000</td>
                
              </tr>
              <tr>
                <td scope="row">16</th>
                <td>9,000</td>
                <td>1,000</td>
                <td>1,34,000</td>
                
              </tr>
              <tr>
                <td scope="row">17</th>
                <td>9,000</td>
                <td>1,000</td>
                <td>1,43,000</td>
               
              </tr>
              <tr>
                <td scope="row">18</th>
                <td>9,500</td>
                <td>500</td>
                <td>1,52,500</td>
               
              </tr>
              <tr>
                <td scope="row">19</th>
                <td>9,500</td>
                <td>500</td>
                <td>1,62,000</td>
               
              </tr>
              <tr>
                <td scope="row">20</th>
                <td>10,000</td>
                <td>-</td>
                <td>1,72,000</td>  
              </tr>
            </tbody>
          </table>
          </div>
          
         <h5 class="text-center mb-2 mt-5" id="chit5l">MONTHLY SCHEMES- 40 monts             CHIT VALUE : 5,00,000           GROUP : LC FL</h5>
           <div class="adjust pricing__wrapper back-input mb-5">
          <table class="table table-bordered customers1 text-center">
            
              <tr class="customers1">
                <th scope="col">MONTHS</th>
                <th scope="col">SUBSCRIPTION</th>
                <th scope="col">DIVIDENT</th>
                <th scope="col">PAID UP
                  VALUE
                  </th>
                <!-- <th scope="col">MONTHLY SUBSCRIPTION</th> -->
              </tr>
    
            <tbody>
              <tr>
                <td scope="row">1</th>
                <td>12,500</td>
                <td>-</td>
                <td>12,500</td>
              </tr>
              <tr>
                <td scope="row">2</th>
                <td>12,500</td>
                <td>-</td>
                <td>25,000</td>
               
              </tr>
              <tr>
                <td scope="row">3</th>
                <td>8,750</td>
                <td>3,750</td>
                <td>33,750</td>
                
              </tr>
              <tr>
                <td scope="row">4</th>
                <td>8,750</td>
                <td>3,750</td>
                <td>42,500</td>
                
              </tr>
              <tr>
                <td scope="row">5</th>
                <td>8,750</td>
                <td>3,750</td>
                <td>51,250</td>
                
              </tr>
              <tr>
                <td scope="row">6</th>
                <td>8,750</td>
                <td>3,750</td>
                <td>60,000</td>
                
              </tr>
              <tr>
                <td scope="row">7</th>
                <td>9,375</td>
                <td>3,125</td>
                <td>69,375</td>
                
              </tr>
              <tr>
                <td scope="row">8</th>
                <td>9,375</td>
                <td>3,125</td>
                <td>78,750</td>
                
              </tr>
              <tr>
                <td scope="row">9</th>
                <td>9,375</td>
                <td>3,125</td>
                <td>88,125</td>
                
              </tr>
              <tr>
                <td scope="row">10</th>
                <td>9,375</td>
                <td>3,125</td>
                <td>97,500</td>
                
              </tr>
              <tr>
                <td scope="row">11</th>
                <td>9,375</td>
                <td>3,125</td>
                <td>1,06,875</td>
                
              </tr>
              <tr>
                <td scope="row">12</th>
                <td>9,375</td>
                <td>3,125</td>
                <td>1,16,250</td>
                
              </tr>
              <tr>
                <td scope="row">13</th>
                <td>10,000</td>
                <td>2,500</td>
                <td>1,26,250</td>
                
              </tr>
              <tr>
                <td scope="row">14</th>
                <td>10,000</td>
                <td>2,500</td>
                <td>1,36,250</td>
               
              </tr>
              <tr>
                <td scope="row">15</th>
                <td>10,000</td>
                <td>2,500</td>
                <td>1,46,250</td>
                
              </tr>
              <tr>
                <td scope="row">16</th>
                <td>10,000</td>
                <td>2,500</td>
                <td>1,56,250</td>
                
              </tr>
              <tr>
                <td scope="row">17</th>
                <td>10,000</td>
                <td>2,500</td>
                <td>1,66,250</td>
               
              </tr>
              <tr>
                <td scope="row">18</th>
                <td>10,000</td>
                <td>2,500</td>
                <td>1,76,250</td>
               
              </tr>
              <tr>
                <td scope="row">19</th>
                <td>10,625</td>
                <td>1,875</td>
                <td>1,86,250</td>
               
              </tr>
              <tr>
                <td scope="row">20</th>
                <td>10,625</td>
                <td>1,875</td>
                <td>1,97,500</td>  
              </tr>
              <tr>
                <td scope="row">21</th>
                <td>10,625</td>
                <td>1,875</td>
                <td>2,08,125</td>
              </tr>
              <tr>
                <td scope="row">22</th>
                <td>10,625</td>
                <td>1,875</td>
                <td>2,08,125</td>
               
              </tr>
              <tr>
                <td scope="row">23</th>
                <td>10,625</td>
                <td>1,875</td>
                <td>2,29,375</td>
                
              </tr>
              <tr>
                <td scope="row">24</th>
                <td>10,625</td>
                <td>1,875</td>
                <td>2,40,000</td>
                
              </tr>
              <tr>
                <td scope="row">25</th>
                <td>11,250</td>
                <td>1,250</td>
                <td>2,51,250</td>
                
              </tr>
              <tr>
                <td scope="row">26</th>
                <td>11,250</td>
                <td>1,250</td>
                <td>2,62,500</td>
                
              </tr>
              <tr>
                <td scope="row">27</th>
                <td>11,250</td>
                <td>1,250</td>
                <td>2,73,750</td>
                
              </tr>
              <tr>
                <td scope="row">28</th>
                <td>11,250</td>
                <td>1,250</td>
                <td>2,85,000</td>
                
              </tr>
              <tr>
                <td scope="row">29</th>
                <td>11,250</td>
                <td>1,250</td>
                <td>2,96,250</td>
                
              </tr>
              <tr>
                <td scope="row">30</th>
                <td>11,875</td>
                <td>625</td>
                <td>3,08,125</td>
                
              </tr>
              <tr>
                <td scope="row">31</th>
                <td>11,875</td>
                <td>625</td>
                <td>3,20,000</td>
                
              </tr>
              <tr>
                <td scope="row">32</th>
                <td>11,875</td>
                <td>625</td>
                <td>3,31,875</td>
                
              </tr>
              <tr>
                <td scope="row">33</th>
                <td>11,875</td>
                <td>625</td>
                <td>3,43,750</td>
                
              </tr>
              <tr>
                <td scope="row">34</th>
                <td>11,875</td>
                <td>625</td>
                <td>3,55,625</td>
               
              </tr>
              <tr>
                <td scope="row">35</th>
                <td>11,875</td>
                <td>625</td>
                <td>3,67,500</td>
                
              </tr>
              <tr>
                <td scope="row">36</th>
                <td>12,187.50</td>
                <td>312.50</td>
                <td>3,79,687</td>
                
              </tr>
              <tr>
                <td scope="row">37</th>
                <td>12,187.50</td>
                <td>312.50</td>
                <td>3,91,874</td>
               
              </tr>
              <tr>
                <td scope="row">38</th>
                <td>12,187.50</td>
                <td>312.50</td>
                <td>4,04,061</td>
               
              </tr>
              <tr>
                <td scope="row">39</th>
                <td>12,187.50</td>
                <td>312.50</td>
                <td>4,16,248</td>
               
              </tr>
              <tr>
                <td scope="row">40</th>
                <td>12,500</td>
                <td>-</td>
                <td>4,28,748</td>  
              </tr>
            </tbody>
          </table>
          </div>
          <!-- <table class="table table-bordered text-center">
            <thead class="thead-light">
              <tr>
                <th scope="col">GROUP</th>
                <th scope="col">CHIT VALUE</th>
                <th scope="col">MONTHS</th>
                <th scope="col">MEMBERS</th>
                <th scope="col">MONTHLY<br>SUBSCRIPTION</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="row">LC OL</th>
                <td>1,00,000</td>
                <td>20</td>
                <td>20</td>
                <td>5,000</td>
              </tr>
              <tr>
                <td scope="row">LC OL</th>
                <td>1,00,000</td>
                <td>10</td>
                <td>10</td>
                <td>10,000</td>
              </tr>
              <tr>
                <td scope="row">LC TL</th>
                <td>2,00,000</td>
                <td>20</td>
                <td>20</td>
                <td>10,000</td>
              </tr>
              <tr>
                <td scope="row">LC TL</th>
                <td>2,00,000</td>
                <td>10</td>
                <td>10</td>
                <td>20,000</td>
              </tr>
              <tr>
                <td scope="row">LC TL</th>
                <td>3,00,000</td>
                <td>30</td>
                <td>30</td>
                <td>10,000</td>
              </tr>
              <tr>
                <td scope="row">LC TL</th>
                <td>3,00,000</td>
                <td>15</td>
                <td>15</td>
                <td>20,000</td>
              </tr>
              <tr>
                <td scope="row">LC TL</th>
                <td>3,00,000</td>
                <td>12</td>
                <td>12</td>
                <td>25,000</td>
              </tr>
              <tr>
                <td scope="row">LC FL</th>
                <td>5,00,000</td>
                <td>25</td>
                <td>25</td>
                <td>20,000</td>
              </tr>
              <tr>
                <td scope="row">LC FL</th>
                <td>5,00,000</td>
                <td>20</td>
                <td>20</td>
                <td>25,000</td>
              </tr>
              <tr>
                <td scope="row">LC TL</th>
                <td>10,00,000</td>
                <td>40</td>
                <td>40</td>
                <td>25,000</td>
              </tr>
              <tr>
                <td scope="row">LC TL</th>
                <td>10,00,000</td>
                <td>40</td>
                <td>40</td>
                <td>50,000</td>
              </tr>
            </tbody>
          </table> -->
          <h4 class="text-center mb-3 mt-4" id="daily">DAILY SCHEMES</h4>
           <div class="adjust pricing__wrapper back-input mb-5">
          <table class="table table-bordered customers1 text-center">
            
              <tr class="customers1">
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col" colspan="2">COLLECTION</th>
                <!-- <th scope="col" >COLL</th> -->
              </tr>
              <tr>
                <th scope="col">GROUP</th>
                <th scope="col">CHIT VALUE</th>
                <th scope="col">MEMBERS</th>
                <th scope="col">MONTH</th>
                <th scope="col">MONTHLY</th>
                <th scope="col">DAILY</th>
                
              </tr>
        
            <tbody>
              <tr>
                <td scope="row">LC TL</th>
                <td>10,00,000</td>
                <td>20</td>
                <td>20</td>
                <td>50,000</td>
                <td>1,700</td>
              </tr>
              <tr>
                <td scope="row">LC TL</th>
                <td>10,00,000</td>
                <td>25</td>
                <td>25</td>
                <td>40,000</td>
                <td>1,400</td>
              </tr>
              <tr>
                <td scope="row">LC FL</th>
                <td>5,00,000</td>
                <td>20</td>
                <td>20</td>
                <td>25,000</td>
                <td>850</td>
              </tr>
              <tr>
                <td scope="row">LC FL</th>
                <td>5,00,000</td>
                <td>25</td>
                <td>25</td>
                <td>20,000</td>
                <td>700</td>
              </tr>
              <tr>
                <td scope="row">LC TF</th>
                <td>2,50,000</td>
                <td>20</td>
                <td>20</td>
                <td>12,500</td>
                <td>500</td>
              </tr>
              <tr>
                <td scope="row">LC TL</th>
                <td>2,00,000</td>
                <td>20</td>
                <td>25</td>
                <td>10,000</td>
                <td>350</td>
              </tr>
              <tr>
                <td scope="row">LC OL</th>
                <td>1,00,000</td>
                <td>20</td>
                <td>20</td>
                <td>5,000</td>
                <td>170</td>
              </tr>
              <tr>
                <td scope="row">LC OL</th>
                <td>1,00,000</td>
                <td>25</td>
                <td>25</td>
                <td>4,000</td>
                <td>140</td>
              </tr>
              <tr>
                <td scope="row">LC FT</th>
                <td>50,000</td>
                <td>20</td>
                <td>20</td>
                <td>2,500</td>
                <td>90</td>
              </tr>
              <!-- <tr>
                <td scope="row">LC TL</th>
                <td>10,00,000</td>
                <td>40</td>
                <td>40</td>
                <td>25,000</td>
              </tr>
              <tr>
                <td scope="row">LC TL</th>
                <td>10,00,000</td>
                <td>40</td>
                <td>40</td>
                <td>50,000</td>
              </tr> -->
            </tbody>
          </table>
          </div>
          
          <!-- <div class="blog-single-wrap">
            <div class="header">
              <div class="post-thumb">
                <img src="assets/img/blog/blog-1.jpg" alt="">
              </div>
              <div class="meta-header">
                <div class="post-author">
                  <div class="avatar">
                    <img src="assets/img/person/person_1.jpg" alt="">
                  </div>
                  by <a href="#">Stephen Doe</a>
                </div>

                <div class="post-sharer">
                  <a href="#" class="btn social-facebook"><span class="mai-logo-facebook-f"></span></a>
                  <a href="#" class="btn social-twitter"><span class="mai-logo-twitter"></span></a>
                  <a href="#" class="btn social-linkedin"><span class="mai-logo-linkedin"></span></a>
                  <a href="#" class="btn"><span class="mai-mail"></span></a>
                </div>
              </div>
            </div>
            <h1 class="post-title">Second divided from form fish beastr</h1>
            <div class="post-meta">
              <div class="post-date">
                <span class="icon">
                  <span class="mai-time-outline"></span>
                </span> <a href="#">March 10, 2020</a>
              </div>
              <div class="post-comment-count ml-2">
                <span class="icon">
                  <span class="mai-chatbubbles-outline"></span>
                </span> <a href="#">4 Comments</a>
              </div>
            </div>
           <div class="post-content">
              <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower.</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui saepe aliquid perferendis neque eos commodi nulla, veniam ex mollitia, quod dignissimos id exercitationem corporis. At optio laudantium suscipit in nam!</p>
              <blockquote class="quote">“I'm selfish, impatient and a little insecure. I make mistakes, I am out of control and at times hard to handle. But if you can't handle me at my worst, then you sure as hell don't deserve me at my best.”
              <span class="author">― Marilyn Monroe</span></blockquote>
              <p>Praesent vel mi bibendum, finibus leo ac, condimentum arcu. Pellentesque sem ex, tristique sit amet suscipit in, mattis imperdiet enim. Integer tempus justo nec velit fringilla, eget eleifend neque blandit. Sed tempor magna sed congue auctor. Mauris eu turpis eget tortor ultricies elementum. Phasellus vel placerat orci, a venenatis justo. Phasellus faucibus venenatis nisl vitae vestibulum. Praesent id nibh arcu. Vivamus sagittis accumsan felis, quis vulputate</p>
            </div>
          </div> -->

          <!--<div class="comment-form-wrap pt-5">-->
          <!--  <h2 class="mb-5">Leave a comment</h2>-->
          <!--  <form action="#" class="">-->
          <!--    <div class="form-row form-group">-->
          <!--      <div class="col-md-6">-->
          <!--        <label for="name">Name *</label>-->
          <!--        <input type="text" class="form-control" id="name">-->
          <!--      </div>-->
          <!--      <div class="col-md-6">-->
          <!--        <label for="email">Email *</label>-->
          <!--        <input type="email" class="form-control" id="email">-->
          <!--      </div>-->
          <!--    </div>-->
          <!--    <div class="form-group">-->
          <!--      <label for="website">Website</label>-->
          <!--      <input type="url" class="form-control" id="website">-->
          <!--    </div>-->
  
          <!--    <div class="form-group">-->
          <!--      <label for="message">Message</label>-->
          <!--      <textarea name="msg" id="message" cols="30" rows="8" class="form-control"></textarea>-->
          <!--    </div>-->
          <!--    <div class="form-group">-->
          <!--      <input type="submit" value="Post Comment" class="btn btn-primary">-->
          <!--    </div>-->
  
          <!--  </form>-->
          <!--</div>-->
        </div>
        <div class="col-md-4">
          <div class="widget">
            <!-- Widget search -->
            <!-- <div class="widget-box"> -->
              <!-- <form action="#" class="search-widget">
                <input type="text" class="form-control" placeholder="Enter keyword..">
                <button type="submit" class="btn btn-primary btn-block">Search</button>
              </form> -->
            <!-- </div> -->

            <!-- Widget Categories -->
            <div class="widget-box ">
              <h4 class="widget-title">Category</h4>
              <div class="divider"></div>

              <ul class="categories">
                <li><a href="#chit1l">20 monts(CHIT VALUE : 1,00,000)</a></li>
                <li><a href="#chit2l">20 monts(CHIT VALUE : 2,00,000)</a></li>
                <li><a href="#chit5l">40 monts(CHIT VALUE : 5,00,000)</a></li>
                <li><a href="#daily">DAILY SCHEMES</a></li>
                <!-- <li><a href="#">Entertainment</a></li> -->
              </ul>
            </div>

            <!-- Widget recent post -->
            <!-- <div class="widget-box">
              <h4 class="widget-title">Recent Post</h4>
              <div class="divider"></div>

              <div class="blog-item">
                  <a class="post-thumb" href="">
                    <img src="assets/img/blog/blog-1.jpg" alt="">
                  </a>
                  <div class="content">
                    <h6 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h6>
                    <div class="meta">
                      <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                      <a href="#"><span class="mai-person"></span> Admin</a>
                      <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                    </div>
                  </div>
              </div>

              <div class="blog-item">
                  <a class="post-thumb" href="">
                    <img src="assets/img/blog/blog-2.jpg" alt="">
                  </a>
                  <div class="content">
                    <h6 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h6>
                    <div class="meta">
                      <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                      <a href="#"><span class="mai-person"></span> Admin</a>
                      <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                    </div>
                  </div>
              </div>

              <div class="blog-item">
                  <a class="post-thumb" href="">
                    <img src="assets/img/blog/blog-3.jpg" alt="">
                  </a>
                  <div class="content">
                    <h6 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h6>
                    <div class="meta">
                      <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                      <a href="#"><span class="mai-person"></span> Admin</a>
                      <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                    </div>
                  </div>
              </div>

            </div> -->

            <!-- Widget Tag Cloud -->
            <!-- <div class="widget-box">
              <h4 class="widget-title">Tag Cloud</h4>
              <div class="divider"></div>

              <div class="tag-clouds">
                <a href="#" class="tag-cloud-link">Projects</a>
                <a href="#" class="tag-cloud-link">Design</a>
                <a href="#" class="tag-cloud-link">Travel</a>
                <a href="#" class="tag-cloud-link">Brand</a>
                <a href="#" class="tag-cloud-link">Trending</a>
                <a href="#" class="tag-cloud-link">Knowledge</a>
                <a href="#" class="tag-cloud-link">Food</a>
              </div>
            </div> -->

          </div>
        </div>
      </div>
    
    </div>
  </div>



<script>
  $(window).resize(function(){

// if ($(window).width() <= 767) {  
// $(".table-bordered").removeClass("table-responsive");
// }  

if ($(window).width() >= 768) {  
$(".table-bordered").addClass("table-responsive");
}  
  }); 
</script>

<?php
include('footer.php');
?>