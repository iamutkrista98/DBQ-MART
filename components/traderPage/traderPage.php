<section id="traderpage">
  <div class="traderpage-elements">
    <div class="traderpage-left">
      <div class="traderpage-sidenav">
        <div class="traderpage-sidenav-elements">
          <div class="traderpage-sidenav-element">
            <i class='bx bx-user'></i>
            <span>Rohan Poudel</span>
          </div>
          <div class="traderpage-sidenav-element">
            <i class='bx bxs-user-detail'></i>
            <a href="./trader.php?option=edit_details"><span>Edit Details</span></a>
          </div>
          <div class="traderpage-sidenav-element">
            <i class='bx bxs-baguette'></i>
            <a href="./trader.php?option=manage_products"><span>Manage Products</span></a>
          </div>
          <div class="traderpage-sidenav-element">
            <i class='bx bx-basket'></i>
            <a href="./trader.php?option=manage_order"> <span>View Orders</span></a>
          </div>
          <div class="traderpage-sidenav-element">
            <i class='bx bx-log-out'></i>
            <span>Logout</span>
          </div>
        </div>
      </div>
    </div>
    <div class="traderpage-right">
      <?PHP 
        $option = $_GET['option'];
        if($option == "edit_details")
        {     
          include "./components/traderPage/components/editdetails.php";
        }
        else if($option == "manage_products")
        {
          include "./components/traderPage/components/manageproducts.php";
        }
        else if($option == "manage_order"){
          include "./components/traderPage/components/manageorders.php";
        }
      ?>

    </div>
  </div>
</section>