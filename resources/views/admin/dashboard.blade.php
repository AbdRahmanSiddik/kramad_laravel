@php
    $title = "K'ramad | Dashboard"
@endphp
@extends('layout.itsbrain')

@section('content')
<div class="page-content">

    <!-- Statistics -->
    <ul class="row stats">
      <li class="col-xs-3"><a href="#" class="btn btn-default">52</a> <span>new pending tasks</span>
      </li>
      <li class="col-xs-3"><a href="#" class="btn btn-default">520</a> <span>pending orders</span>
      </li>
      <li class="col-xs-3"><a href="#" class="btn btn-default">14</a> <span>new opened tickets</span>
      </li>
      <li class="col-xs-3"><a href="#" class="btn btn-default">48</a> <span>new user
          registrations</span></li>
    </ul>
    <!-- /statistics -->

    <!-- Simple chart -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <h6 class="panel-title">Simple chart</h6>
      </div>
      <div class="panel-body">
        <div class="graph-standard" id="simple_graph"></div>
      </div>
    </div>
    <!-- /simple chart -->

    <!-- Calendar -->
    <div class="panel panel-default">
      <div class="panel-heading">
        <h5 class="panel-title">Charts</h5>
      </div>
      <div class="panel-body">
        <div class="fullcalendar"></div>
      </div>
    </div>
    <!-- /calendar -->

    <div class="row">
      <div class="col-md-6">

        <!-- Default datatable inside panel -->
        <div class="panel panel-default">
          <div class="panel-heading">
            <h6 class="panel-title">Default datatable inside panel</h6>
          </div>
          <div class="datatable">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- /default datatable inside panel -->

      </div>

      <div class="col-md-6">

        <!-- Tabs -->
        <div class="widget">
          <h5 class="heading-underline"><i class="fa fa-columns"></i> Bootstrap tabs</h5>
          <div class="tabbable">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#default-tab1" data-toggle="tab">Home</a></li>
              <li><a href="#default-tab2" data-toggle="tab">Profile</a></li>
              <li><a href="#default-tab3" data-toggle="tab">Statistics <span
                    class="label label-danger">12</span></a></li>
              <li><a href="#default-tab4" data-toggle="tab">Settings</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b
                    class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#default-tab5" tabindex="-1" data-toggle="tab">@fat</a></li>
                  <li><a href="#default-tab6" tabindex="-1" data-toggle="tab">@mdo</a></li>
                </ul>
              </li>
            </ul>

            <div class="tab-content has-padding">
              <div class="tab-pane fade in active" id="default-tab1">
                Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg
                carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
                Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat
                salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher
                voluptate nisi qui.
              </div>

              <div class="tab-pane fade" id="default-tab2">
                Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes
                anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
                letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl
                cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.
                Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan
                fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY
                ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr
                butcher vero sint qui sapiente accusamus tattooed echo park.
              </div>

              <div class="tab-pane fade" id="default-tab3">
                DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.
                Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy
                retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl
                craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.
              </div>

              <div class="tab-pane fade" id="default-tab4">
                Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda
                labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna
                velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit,
                sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art
                party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed
                echo park.
              </div>

              <div class="tab-pane fade" id="default-tab5">
                Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's
                organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify
                pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy
                hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred
                pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel
                fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of
                them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.
              </div>

              <div class="tab-pane fade" id="default-tab6">
                Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they
                sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny
                pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.
                Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS
                viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats
                keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park
                vegan.
              </div>
            </div>
          </div>
        </div>
        <!-- /tabs -->


        <!-- WYSIWYG editor inside panel -->
        <div class="panel panel-default">
          <div class="panel-heading">
            <h6 class="panel-title"><i class="fa fa-pencil"></i> Editor inside panel</h6>
          </div>
          <div class="panel-body">
            <form action="#" role="form">
              <textarea class="editor" placeholder="Enter text ..."></textarea>
              <div class="form-actions text-right">
                <button type="submit" class="btn btn-danger">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /WYSIWYG editor inside panel -->

      </div>
    </div>


    <!-- With titles (frame) -->
    <h4>Items with titles</h4>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="widget">
          <div class="thumbnail">
            <div class="thumb">
              <img alt="" src="images/demo/images/1.png">
              <div class="thumb-options">
                <span>
                  <a href="#" class="btn btn-icon btn-default"><i class="fa fa-pencil"></i></a>
                  <a href="#" class="btn btn-icon btn-default"><i class="fa fa-times"></i></a>
                </span>
              </div>
            </div>
            <div class="caption">
              <a href="#" title="" class="caption-title">Aenean Malesuada Consectetur
                Risus</a>
              Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel
              scelerisque nisl consectetur mollis ornare vel leo.
            </div>
          </div>
        </div>

        <div class="widget">
          <div class="thumbnail">
            <div class="thumb">
              <img alt="" src="images/demo/images/2.png">
              <div class="thumb-options">
                <span>
                  <a href="#" class="btn btn-icon btn-default"><i class="fa fa-pencil"></i></a>
                  <a href="#" class="btn btn-icon btn-default"><i class="fa fa-times"></i></a>
                </span>
              </div>
            </div>
            <div class="caption">
              <a href="#" title="" class="caption-title">Aenean Malesuada Consectetur
                Risus</a>
              Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel
              scelerisque nisl consectetur mollis ornare vel leo.
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="widget">
          <div class="thumbnail">
            <div class="thumb">
              <img alt="" src="images/demo/images/3.png">
              <div class="thumb-options">
                <span>
                  <a href="#" class="btn btn-icon btn-default"><i class="fa fa-pencil"></i></a>
                  <a href="#" class="btn btn-icon btn-default"><i class="fa fa-times"></i></a>
                </span>
              </div>
            </div>
            <div class="caption">
              <a href="#" title="" class="caption-title">Aenean Malesuada Consectetur
                Risus</a>
              Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel
              scelerisque nisl consectetur mollis ornare vel leo.
            </div>
          </div>
        </div>

        <div class="widget">
          <div class="thumbnail">
            <div class="thumb">
              <img alt="" src="images/demo/images/4.png">
              <div class="thumb-options">
                <span>
                  <a href="#" class="btn btn-icon btn-default"><i class="fa fa-pencil"></i></a>
                  <a href="#" class="btn btn-icon btn-default"><i class="fa fa-times"></i></a>
                </span>
              </div>
            </div>
            <div class="caption">
              <a href="#" title="" class="caption-title">Aenean Malesuada Consectetur
                Risus</a>
              Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel
              scelerisque nisl consectetur mollis ornare vel leo.
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="widget">
          <div class="thumbnail">
            <div class="thumb">
              <img alt="" src="images/demo/images/5.png">
              <div class="thumb-options">
                <span>
                  <a href="#" class="btn btn-icon btn-default"><i class="fa fa-pencil"></i></a>
                  <a href="#" class="btn btn-icon btn-default"><i class="fa fa-times"></i></a>
                </span>
              </div>
            </div>
            <div class="caption">
              <a href="#" title="" class="caption-title">Aenean Malesuada Consectetur
                Risus</a>
              Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel
              scelerisque nisl consectetur mollis ornare vel leo.
            </div>
          </div>
        </div>

        <div class="widget">
          <div class="thumbnail">
            <div class="thumb">
              <img alt="" src="images/demo/images/6.png">
              <div class="thumb-options">
                <span>
                  <a href="#" class="btn btn-icon btn-default"><i class="fa fa-pencil"></i></a>
                  <a href="#" class="btn btn-icon btn-default"><i class="fa fa-times"></i></a>
                </span>
              </div>
            </div>
            <div class="caption">
              <a href="#" title="" class="caption-title">Aenean Malesuada Consectetur
                Risus</a>
              Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel
              scelerisque nisl consectetur mollis ornare vel leo.
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="widget">
          <div class="thumbnail">
            <div class="thumb">
              <img alt="" src="images/demo/images/7.png">
              <div class="thumb-options">
                <span>
                  <a href="#" class="btn btn-icon btn-default"><i class="fa fa-pencil"></i></a>
                  <a href="#" class="btn btn-icon btn-default"><i class="fa fa-times"></i></a>
                </span>
              </div>
            </div>
            <div class="caption">
              <a href="#" title="" class="caption-title">Aenean Malesuada Consectetur
                Risus</a>
              Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel
              scelerisque nisl consectetur mollis ornare vel leo.
            </div>
          </div>
        </div>

        <div class="widget">
          <div class="thumbnail">
            <div class="thumb">
              <img alt="" src="images/demo/images/8.png">
              <div class="thumb-options">
                <span>
                  <a href="#" class="btn btn-icon btn-default"><i class="fa fa-pencil"></i></a>
                  <a href="#" class="btn btn-icon btn-default"><i class="fa fa-times"></i></a>
                </span>
              </div>
            </div>
            <div class="caption">
              <a href="#" title="" class="caption-title">Aenean Malesuada Consectetur
                Risus</a>
              Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel
              scelerisque nisl consectetur mollis ornare vel leo.
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /with titles (frame) -->

</div>
@endsection
