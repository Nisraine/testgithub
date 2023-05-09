@extends('backoffice.layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
      <h1 class="db-header-title">Welcome, Anny</h1>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6">
      <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
        <span class="ms-chart-label bg-black"><i class="material-icons">arrow_upward</i> 3.2%</span>
        <div class="ms-card-body media">
          <div class="media-body">
            <span class="black-text"><strong>Sells total</strong></span>
            <h2>{{$commande->sum('prix')}}.00 MAD</h2>
          </div>
        </div>
        <canvas id="line-chart" style="display: block; height: 130px; width: 262px;" width="327" height="162" class="chartjs-render-monitor"></canvas>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6">
      <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
        <span class="ms-chart-label bg-red"><i class="material-icons">arrow_downward</i> 4.5%</span>
        <div class="ms-card-body media">
          <div class="media-body">
            <span class="black-text"><strong>New customers</strong></span>
            <h2>{{$client->count()}}</h2>
          </div>
        </div>
        <canvas id="line-chart-2" width="327" height="162" style="display: block; height: 130px; width: 262px;" class="chartjs-render-monitor"></canvas>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6">
      <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
        <span class="ms-chart-label bg-black"><i class="material-icons">arrow_upward</i> 12.5%</span>
        <div class="ms-card-body media">
          <div class="media-body">
            <span class="black-text"><strong>All Users</strong></span>
            <h2>{{$clients->count()}}</h2>
          </div>
        </div>
        <canvas id="line-chart-3" width="327" height="162" style="display: block; height: 130px; width: 262px;" class="chartjs-render-monitor"></canvas>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6">
      <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
        <span class="ms-chart-label bg-red"><i class="material-icons">arrow_upward</i> 9.5%</span>
        <div class="ms-card-body media">
          <div class="media-body">
            <span class="black-text"><strong>Total Orders</strong></span>
            <h2>{{$commande->count()}}</h2>
          </div>
        </div>
        <canvas id="line-chart-4" width="327" height="162" style="display: block; height: 130px; width: 262px;" class="chartjs-render-monitor"></canvas>
      </div>
    </div>
    <div class="col-12">
      <div class="ms-panel">
        <div class="ms-panel-header">
          <h6>Recently Placed Orders</h6>
        </div>
        <div class="ms-panel-body">
          <div class="table-responsive">
            <table class="table table-hover thead-primary">
              <thead>
                <tr>
                  <th scope="col">Order ID</th>
                  <th scope="col">Customer Name</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Order Status</th>
                  <th scope="col">Price</th>
                </tr>
              </thead>
              <tbody>
                @if($commande->count() > 0)
               @foreach ($commande->get() as $cmd)
                <tr>
                  <th scope="row">{{$cmd->id}}</th>
                  <td>{{$cmd->client->name}}</td>
                  <td>{{$cmd->client->tele}}</td>
                  <td><span class="badge badge-primary">{{$cmd->etat}}</span>
                  </td>
                  <td>{{$cmd->prix}}</td>
                </tr>
                @endforeach
                @else
                <tr>
                  <td colspan="7" class="text-center text-danger">No Data</td>
                </tr>
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  
      <!-- Recent Orders< -->

     
  
  </div>

  @endsection