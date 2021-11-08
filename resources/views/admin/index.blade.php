@include('includes.adminheader')

<div class="jumbotron container">
   <h2 class="display-4">Manage Data</h2>
   <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">View Data</h5>
                    <p class="card-text">View Data of Security Personnel, Office Staff and Office.</p>
                    <a href="{{ route('view_data') }}"class="btn btn-primary" style="background:#FFA500;border-color:#FFA500;" >View Data</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Register Data</h5>
                    <p class="card-text">Register Security Personnel, Office Staff or Office.</p>
                    <a href="{{ route('reg_data') }}"class="btn btn-primary" style="background:#FFA500;border-color:#FFA500;" >Register Now</a>
                </div>  
            </div>
        </div>
    </div>
</div>
<div class="jumbotron container">
   <h2 class="display-4">Visitor</h2>
   <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">All Visitor</h5>
                    <p class="card-text">View visitor information and All visit history of Visitor.</p>
                    <a href="{{ route('all_visit') }}"class="btn btn-primary" style="background:#FFA500;border-color:#FFA500;" >View All</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Today's Visit</h5>
                    <p class="card-text">View today's visit Information and see Visitor visit history.</p>
                    <a href="{{ route('tod_visit') }}"class="btn btn-primary" style="background:#FFA500;border-color:#FFA500;" >View Today's Visit</a>
                </div>  
            </div>
        </div>
    </div>
</div>
