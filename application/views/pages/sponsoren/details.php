<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-sm-4">
		<h2>Evenement details</h2>
		<ol class="breadcrumb">
			<li>
				<a href="index.html">Home</a>
			</li>
			<li>
				Evenement
			</li>
			<li class="active">
				<strong>Details</strong>
			</li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-9">
		<div class="wrapper wrapper-content animated fadeInUp">
			<div class="ibox">
				<div class="ibox-content">
					<div class="row">
						<div class="col-lg-12">
							<div class="m-b-md">
								<a href="#" class="btn btn-white btn-xs pull-right">Bewerk evenement</a>
								<h2><?= $evenement->naam ?></h2>
							</div>
							<dl class="dl-horizontal">
								<dt>Status:</dt> <dd><span class="label label-<?= ($evenement->zichtbaar) ? 'primary' : 'default' ?>"><?= ($evenement->zichtbaar) ? 'Zichtbaar' : 'Niet zichtbaar' ?></span></dd>
							</dl>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-5">
							<dl class="dl-horizontal">
								<dt>Datum:</dt> <dd><?= Str::reverseDate($evenement->datum) ?></dd>
								<dt>Locatie:</dt> <dd><?= $evenement->locatie ?></dd>
								<dt>Aangemaakt door:</dt> <dd><?= Persoon::find($evenement->persoon_id)->volledige_naam() ?></dd>
							</dl>
						</div>
						<div class="col-lg-7" id="cluster_info">
							<dl class="dl-horizontal" >	
								<dt>Prijs leden:</dt> <dd> <?= Str::money($evenement->prijs_leden) ?></dd>
								<dt>Prijd niet-leden:</dt> <dd> <?= Str::money($evenement->prijs_niet_leden) ?></dd>
							</dl>
						</div>
					</div>
					<?php if($evenement->plekken > 0): ?>
						<div class="row">
							<div class="col-lg-12">
								<dl class="dl-horizontal">
									<dt>Completed:</dt>
									<dd>
										<div class="progress progress-striped active m-b-sm">
											<div style="width: <?= (100 / $evenement->plekken * count($evenement->personen)) ?>%;" class="progress-bar"></div>
										</div>
										<small>Project completed in <strong>60%</strong>. Remaining close the project, sign a contract and invoice.</small>
									</dd>
								</dl>
							</div>
						</div>
					<?php endif ?> 
					<div class="row m-t-sm">
						<div class="col-lg-12">
							<div class="panel blank-panel">
                                <div class="panel-heading">
                                    <div class="panel-options">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab-1" data-toggle="tab">Reacties</a></li>
                                            <li class=""><a href="#tab-2" data-toggle="tab">Deelnemers</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="panel-body">

									<div class="tab-content">
										<div class="tab-pane active" id="tab-1">
											<div class="feed-activity-list">
												<div class="feed-element">
													<a href="#" class="pull-left">
														<img alt="image" class="img-circle" src="/img/profile_blank.png">
													</a>
													<div class="media-body ">
														<small class="pull-right">2h ago</small>
														<strong>Mark Johnson</strong> posted message on <strong>Monica Smith</strong> site. <br>
														<small class="text-muted">Today 2:10 pm - 12.06.2014</small>
														<div class="well">
															Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
															Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
														</div>
													</div>
												</div>
											</div>

										</div>
										<div class="tab-pane" id="tab-2">
											<table class="table table-striped">
												<thead>
													<tr>
														<th>&nbsp;</th>
														<th>Naam</th>
														<th>Ingeschreven op</th>
														<th>Betaald op</th>
													</tr>
												</thead>
												<tbody>
													<?php if(count($evenement->personen) > 0): ?>
														<?php foreach($evenement->personen as $persoon): ?>
															<tr>
																<td>
																	<span class="label label-primary"><i class="fa fa-check"></i> Betaald</span>
																</td>
																<td><?= $persoon->volledige_naam() ?></td>
																<td><?= Str::reverseDate($persoon->datum_ingeschreven) ?></td>
																<td><?= Str::reverseDate($persoon->datum_betaald) ?></td>
															</tr>
														<?php endforeach ?>
													<?php else: ?>
															<tr><td colspan="4">Er zijn (nog) geen deelnemers voor dit evenement</td></tr>
													<?php endif ?>
												</tbody>
											</table>
										</div>
									</div>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="wrapper wrapper-content project-manager">
			<h4>Project description</h4>
			<img src="img/zender_logo.png" class="img-responsive">
			<p class="small">
				There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look
				even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
			</p>
			<p class="small font-bold">
				<span><i class="fa fa-circle text-warning"></i> High priority</span>
			</p>
			<h5>Project tag</h5>
			<ul class="tag-list" style="padding: 0">
				<li><a href=""><i class="fa fa-tag"></i> Zender</a></li>
				<li><a href=""><i class="fa fa-tag"></i> Lorem ipsum</a></li>
				<li><a href=""><i class="fa fa-tag"></i> Passages</a></li>
				<li><a href=""><i class="fa fa-tag"></i> Variations</a></li>
			</ul>
			<h5>Project files</h5>
			<ul class="list-unstyled project-files">
				<li><a href=""><i class="fa fa-file"></i> Project_document.docx</a></li>
				<li><a href=""><i class="fa fa-file-picture-o"></i> Logo_zender_company.png</a></li>
				<li><a href=""><i class="fa fa-stack-exchange"></i> Email_from_Alex.mln</a></li>
				<li><a href=""><i class="fa fa-file"></i> Contract_20_11_2014.docx</a></li>
			</ul>
			<div class="text-center m-t-md">
				<a href="#" class="btn btn-xs btn-primary">Add files</a>
				<a href="#" class="btn btn-xs btn-primary">Report contact</a>

			</div>
		</div>
	</div>
</div>