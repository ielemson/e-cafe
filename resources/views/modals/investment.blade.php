 <!--   INVESTMENT MODAL-->
@if(count($service_plan)>0)
    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>

    <h6 class="modal-title" id="myModalLabel" style="font-size:1.2em;" align="center">Choose Your Subscription Plan</h6>
    </div>

    <div class="modal-body">
    <div id="info_div"></div> 
    <form id="Update_Acc" method="post"  action=" ">

    <div class="slides">
    <div class="form-group input-group">
    <span class="input-group-addon"><i class="fa fa-money"></i><b>TNC</b>
    </span>
    <select class="form-control" id="fund_wallet" required>
    <option value=""><b class="fa fa-money"></b>TNC EQUIVALENT</option>

    <?php  
//    $plan = $pdo->prepare('SELECT * FROM service_plan ORDER BY plan_sn ASC');
//    $plan->execute();
//    $plan_count = $plan->rowCount();
//    if($plan_count > 0){
//    while($plans = $plan->fetch(PDO::FETCH_ASSOC)){
//    echo " <option value=".$plans['plan_sn'].">&#8358;".$plans['plans']." = <b class='fa fa-money'></b>TNC-".$plans['prices']."</option>";
//    }
//    }
    ?>

    @foreach($service_plan as $prices)
    <option value="{{$prices->id}}" id="price_id">&#8358;{{$prices->naira_value}} = <b class='fa fa-money'></b>TNC-{{$prices->tcn_equivalent}}</option>";
    @endforeach
    </select>
    </div>

    </div>

    <div class="sliding">
    <div class="col-lg-12 downs" style="display:none;">
    <div class="panel panel-primary">
    <!--
    <div class="panel-heading" style="border-radius:2px;">
    <h5 align="center">Please follow the steps below to fund your account 

    </h5>
    </div>
    -->
    <div class="panel-body mywallet">
    <div class="add_service"></div>
    </div>
    <div class="panel-footer">
    <!--<a href="#" class="next btn btn-warning btn-xs btn-block">What Next After Payment &nbsp;<b class="fa fa-arrow-right"></b></a>-->
    </div>
    </div>
    </div> </div>

    <button type="button" class="btn btn-danger btn-block btn-xs changes" data-dismiss="modal">Close</button>
    <!--                            <button type="submit" class="btn btn-primary pull-right update">Update</button>-->
    </form>
    </div>

    </div>
    </div>
    </div>
    @endif
    <!--INVESTMENT MODAL ENDS HERE-->