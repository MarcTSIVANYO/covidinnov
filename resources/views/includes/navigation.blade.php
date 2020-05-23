<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				@if(Auth::check())
				<img src="{{  url(Auth::user()->logo_users) }}" class="img-circle" alt="User Image" style="height: 50px; width: 50px;">
				@else
				<p></p>
				@endif
			</div>
			<div class="pull-left info">
				<p> @if(Auth::check())
					{{Auth::user()->login_users}}
					@endif</p>
					<a href="#"><i class="fa fa-circle text-success"></i> Connecté</a>
				</div>
			</div> 
			<!-- /.search form -->
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu">
				<li class="header">MENU PRINCIPAL</li>
				@if(Auth::check())
			  <?php 
			     	$id = Auth::user()->id_users;
			        $types_users = DB::table('groupe_users')->select('id_type_users')->where('id_users', '=', $id)->get();
			    foreach ($types_users as $types_user) {
			    	$droits = DB::table('droits')->where('id_type_users', '=', $types_user->id_type_users)->get();
			            $menus = DB::table('menus')->where('visible_menus', '=', '1')->orderBy('indice_menus','asc')->get();
			            $sous_menus = DB::table('sous_menus')->where('visible_sous_menus', '=', '1')->orderBy('indice_sous_menus','asc')->get();
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
			                @break
			              @endif 
			            @endforeach
			          @endif
			          @if($i == 1)
			            <?php $i = 10; ?>
			                <li class="treeview">
			            	<a href="javascript:void(0)">
			            		<i class="fa {{ $menu->libelle_menus }}"></i> <span>{{ $menu->titre_menus }}</span>
			            		<span class="pull-right-container">
			            			<i class="fa fa-angle-left pull-right"></i>
			            		</span>
			            	</a>
			            	<ul class="treeview-menu">
				            	<li class="active">
				            		<a href="{{URL::To($sous_menu->lien_sous_menus)}}"><i class="fa {{ $sous_menu->libelle_sous_menus }}"></i> {{ $sous_menu->titre_sous_menus }}</a>
				            	</li>
					          @elseif($i > 1 &&  $j == 1 && $sous_menu->id_menus == $menu->id_menus) 
					            <li class="active">
					            	<a href="{{URL::To($sous_menu->lien_sous_menus)}}"><i class="fa {{ $sous_menu->libelle_sous_menus }}"></i> {{ $sous_menu->titre_sous_menus }}</a>
					            </li>
			          	@endif
			        @endforeach
			        @if($i == 0)
			        @else
			          </ul></li>
			        @endif
			    @endforeach
			    <?php $menus_save = $menus;
			   ?>
			    @foreach($menus_save as $menu)
			    	<?php $droits_save = $droits; ?>
			        @foreach($droits_save as $droit)
			          @if($droit->id_menus == $menu->id_menus)
			            <li><a href="{{URL::To($menu->lien_menus)}}"><i class="fa {{ $menu->libelle_menus }}"></i> <span>{{ $menu->titre_menus }}</span></a></li>
			            @break
			          @endif
			        @endforeach
			    @endforeach
			  <?php  } ?>
			@endif
        	</ul>
		</section>
	</aside>