<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<!-- <img src="{{ asset('../resources/assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image"> -->
				@if(Auth::check())
				<img src="{{  url(Auth::user()->logo_users) }}" class="img-circle" alt="User Image">
				@else
				<p></p>
				@endif
			</div>
			<div class="pull-left info">
				<p> @if(Auth::check())
					{{Auth::user()->nom_users}} {{Auth::user()->prenoms_users}}

					@endif</p>
					<a href="#"><i class="fa fa-circle text-success"></i> Connecté</a>
				</div>
			</div>
			<!-- search form -->
			<form action="#" method="get" class="sidebar-form">
				<div class="input-group">
					<input type="text" name="q" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
						<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
						</button>
					</span>
				</div>
			</form>
			<!-- /.search form -->
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu">
				<li class="header">NAVIGATION PRINCIPALE</li>
				@if(Auth::check())
			  <?php 
			     $id = Auth::user()->id_users;
			            $droits = DB::table('droits')->where('id_users', '=', $id)->get();
			            $menus = DB::table('menus')->where('visible_menus', '=', '1')->get();
			            $sous_menus = DB::table('sous_menus')->where('visible_sous_menus', '=', '1')->get();
			            //$type_users = App\TypeUser::lists('libelle_type_users',  'id_type_users');
			            #session('droits', $droits);
			            #session('menus', $menus);
			            #session('sous_menus', $sous_menus);
			            #session('type_users', $type_users);
			            $menus_save = $menus;

			   ?>
			    @foreach($menus_save as $menu)
			      <?php $i = 0;
			   ?>

			  
			      <?php $sous_menus_save = $sous_menus; ?>
			        @foreach($sous_menus_save as $sous_menu)
			          @if($sous_menu->id_menus == $menu->id_menus)
			          <?php $sous_droits_save = $droits; $j = 0;?>
			            
			            @foreach($sous_droits_save as $droit)
			              @if($droit->id_sous_menus == $sous_menu->id_sous_menus)
			                <?php $i++;
			                  $j = 1;
			                ?>
			                
			              @endif 
			            @endforeach
			          @endif
			          @if($i == 1)
			            <?php $i = 10; ?>
			                <li class="treeview">
			            	<a href="#">
			            		<i class="fa fa-pie-chart"></i> <span>{{ $menu->titre_menus }}</span>
			            		<span class="pull-right-container">
			            			<i class="fa fa-angle-left pull-right"></i>
			            		</span>
			            	</a>
			            	<ul class="treeview-menu">
			            	<li><a href="{{URL::To($sous_menu->lien_sous_menus)}}"><i class="fa fa-circle-o text-aqua"></i> <span>{{ $sous_menu->titre_sous_menus }}</span></a></li>
			          @elseif($i > 1 &&  $j == 1)
			            <li><a href="{{URL::To($sous_menu->lien_sous_menus)}}"><i class="fa fa-circle-o text-aqua"></i> <span>{{ $sous_menu->titre_sous_menus }}</span></a></li>
			          @endif
			        @endforeach
			        @if($i == 0)
			        @else
			          </ul></li>
			        @endif
			    @endforeach
			@endif
			</ul>
		</section>
	</aside>