@extends('frontend.dashboard.dashboard-app')


@section('dashboard-content')
    <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
        <div class="card">
            <div class="card-header p-0 pb-10">
                <h3 class="mb-0">Hello Rosie!</h3>
            </div>
            <div class="card-body p-0">
                <p>
                    From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>,<br />
                    manage your <a href="#">shipping and billing addresses</a> and <a href="#">edit your password and
                        account details.</a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="dashboard_card blue">
                    <span><i class="fa-solid fa-cart-shopping"></i></span>
                    <h3>27</h3>
                    <p>Total Order</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="dashboard_card red">
                    <span><i class="fa-solid fa-xmark"></i></span>
                    <h3>24</h3>
                    <p>Cancel Order</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="dashboard_card orange">
                    <span><i class="fa-solid fa-spinner"></i></span>
                    <h3>30</h3>
                    <p>Pending Order</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="dashboard_card green">
                    <span><i class="fi-rs-shopping-bag"></i></span>
                    <h3>30</h3>
                    <p>Total Order</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="dashboard_card pink">
                    <span><i class="fi-rs-shopping-bag"></i></span>
                    <h3>30</h3>
                    <p>Total Order</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="dashboard_card purple">
                    <span><i class="fi-rs-shopping-bag"></i></span>
                    <h3>30</h3>
                    <p>Total Order</p>
                </div>
            </div>
        </div>
    </div>


    <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
        <div class="card">
            <div class="card-header p-0">
                <h3 class="mb-0">Your Orders</h3>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="order_table table m-0 mt-20">
                        <thead>
                            <tr>
                                <th>Order</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#1357</td>
                                <td>March 45, 2020</td>
                                <td><span class="text-warning">Pending</span></td>
                                <td>$125.00 for 2 item</td>
                                <td><a href="dashboard_order_details.html" class="btn-small d-block">View</a></td>
                            </tr>
                            <tr>
                                <td>#2468</td>
                                <td>June 29, 2020</td>
                                <td><span class="text-danger">Cancel</span></td>
                                <td>$364.00 for 5 item</td>
                                <td><a href="dashboard_order_details.html" class="btn-small d-block">View</a></td>
                            </tr>
                            <tr>
                                <td>#2366</td>
                                <td>August 02, 2020</td>
                                <td><span class="text-primary">Completed</span></td>
                                <td>$280.00 for 3 item</td>
                                <td><a href="dashboard_order_details.html" class="btn-small d-block">View</a></td>
                            </tr>
                            <tr>
                                <td>#1357</td>
                                <td>March 45, 2020</td>
                                <td><span class="text-warning">Processing</span></td>
                                <td>$125.00 for 2 item</td>
                                <td><a href="dashboard_order_details.html" class="btn-small d-block">View</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
