<?php
	require_once('config.php');
	if ($lighttheme) {
		$background = "grey lighten-5";
		$textcolor = "grey-text text-darken-3";
		$textcolor2 = "#424242";
	} else {
		$background = "grey darken-4";
		$textcolor = "grey-text text-lighten-3";
		$textcolor2 = "#eeeeee";
		$divider = "grey darken-3";
	}
?>

	<!DOCTYPE html>

	<html>

	<head>

		<title>Directory listing of
			<?php echo $lister->getListedPath(); ?>
		</title>
		<?php if($themefavicon) { ?>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>/img/favicon_<?php echo $color; ?>_<?php echo $faviconstyle; ?>.png">
		<?php } else { ?>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>/img/favicon_default_<?php echo $faviconstyle; ?>.png">
		<?php } ?>

		<!-- STYLES
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">-->
		<link rel="stylesheet" href="<?php echo THEMEPATH; ?>/css/materialize.min.css">
		<!--<link rel="stylesheet" type="text/css" href="<?php echo THEMEPATH; ?>/css/style.css">-->

		<!--<style>
		#directory-listing a {
			color: <?php echo $textcolor2; ?>;
		}
	</style>-->

		<!-- SCRIPTS -->
		<script type="text/javascript" src="<?php echo THEMEPATH; ?>/js/jquery-3.1.1.min.js"></script>
		<script src="<?php echo THEMEPATH; ?>/js/bootstrap.min.js"></script>
		<script src="<?php echo THEMEPATH; ?>/js/materialize.min.js"></script>
		<script type="text/javascript" src="<?php echo THEMEPATH; ?>/js/directorylister.js"></script>

		<!-- FONTS -->
		<!--<link href='https://fonts.googleapis.com/css?family=Roboto:400,500|Roboto+Mono' rel='stylesheet' type='text/css'>-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="<?php echo THEMEPATH; ?>/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />

		<!-- META -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">

		<?php file_exists('analytics.inc') ? include('analytics.inc') : false; ?>

	</head>

	<body class="<?php echo $background; ?>">

		<!--<nav>
    <div class="nav-wrapper">
            <!--<div id="page-navbar" class="navbar navbar-default navbar-fixed-top">->

                    <?php $breadcrumbs = $lister->listBreadcrumbs(); ?>

      <div class="col s12">
                        <?php foreach($breadcrumbs as $breadcrumb): ?>
                            <?php if ($breadcrumb != end($breadcrumbs)): ?>
                                    <a href="<?php echo $breadcrumb['link']; ?>" class="breadcrumb"><?php echo $breadcrumb['text']; ?></a>
                            <?php else: ?>
                                <a href="#!" class="breadcrumb"><?php echo $breadcrumb['text']; ?></a>
                            <?php endif; ?>
                        <?php endforeach; ?>
      </div>
                    <!--<p class="navbar-text">
                        <?php foreach($breadcrumbs as $breadcrumb): ?>
                            <?php if ($breadcrumb != end($breadcrumbs)): ?>
                                    <a href="<?php echo $breadcrumb['link']; ?>"><?php echo $breadcrumb['text']; ?></a>
                                    <span>/</span>
                            <?php else: ?>
                                <?php echo $breadcrumb['text']; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </p>->

                    <div class="navbar-right">

                        <ul id="page-top-nav" class="nav navbar-nav">
                            <li>
                                <a href="javascript:void(0)" id="page-top-link">
                                    <i class="material-icons" style="font-size: 20px">arrow_upward</i>
                                </a>
                            </li>
                        </ul>

                        <?php  if ($lister->isZipEnabled()): ?>
                            <ul id="page-top-download-all" class="nav navbar-nav">
                                <li>
                                    <a href="?zip=<?php echo $lister->getDirectoryPath(); ?>" id="download-all-link">
                                        <i class="material-icons" style="font-size: 20px">file_download</i>
                                    </a>
                                </li>
                            </ul>
                        <?php endif; ?>

                    </div>

            </div>
			</nav>-->
		<div id="page-navbar" class="wrapper">
			<nav>
				<div class="nav-wrapper <?php echo $color; ?>">
					<div class="container">
						<?php foreach($breadcrumbs as $breadcrumb): ?>
						<?php if ($breadcrumb != end($breadcrumbs)): ?>
						<a href="<?php echo $breadcrumb['link']; ?>" class="breadcrumb">
							<?php echo $breadcrumb['text']; ?>
						</a>
						<?php else: ?>
						<a href="#!" class="breadcrumb">
							<?php echo $breadcrumb['text']; ?>
						</a>
						<?php endif; ?>
						<?php endforeach; ?>


						<?php  if ($lister->isZipEnabled()): ?>
						<ul id="page-top-download-all" class="right">
							<li>
								<a href="?zip=<?php echo $lister->getDirectoryPath(); ?>" id="download-all-link">
									<i class="material-icons" style="font-size: 20px">file_download</i>
								</a>
							</li>
						</ul>
						<?php endif; ?>
					</div>
				</div>
		</div>
		</nav>
		<br>
		<div id="page-content" class="container">

			<?php file_exists('header.php') ? include('header.php') : include($lister->getThemePath(true) . "/default_header.php"); ?>

			<?php if($lister->getSystemMessages()): ?>
			<?php foreach ($lister->getSystemMessages() as $message): ?>
			<div class="alert alert-<?php echo $message['type']; ?>">
				<?php echo $message['text']; ?>
				<a class="close" data-dismiss="alert" href="#">&times;</a>
			</div>
			<?php endforeach; ?>
			<?php endif; ?>

			<div id="directory-list-header" class="<?php echo $textcolor; ?>">
				<div class="row">
					<div class="col m6 s9"><b>File</b></div>
					<div class="col m2 s2 text-right"><b>Size</b></div>
					<div class="col m3 hide-on-small-only text-right"><b>Last Modified</b></div>
					<div class="col m1 text-right"></div>
				</div>
			</div>

			<ul id="directory-listing" class="nav nav-pills nav-stacked">

				<?php foreach($dirArray as $name => $fileInfo): ?>
				<?php include('fileIcon.php'); ?>
				<li data-name="<?php echo $name; ?>" data-href="<?php echo $fileInfo['url_path']; ?>">
					<a href="<?php echo $fileInfo['url_path']; ?>" class="<?php echo $textcolor; ?> clearfix" data-name="<?php echo $name; ?>">


						<div class="row">
							<span class="file-name col m6 s9">
                                        <i class="<?php echo $themeiconsleft ? $color.'-text' : ''; ?> mdi mdi-<?php echo $useIcon; ?>" style="font-size: 20px;"></i>
                                        <?php echo $name; ?>
                                    </span>

							<span class="file-size col m2 s2 text-right">
                                        <?php echo $fileInfo['file_size']; ?>
                                    </span>

							<span class="file-modified col m3 hide-on-small-only text-right">
                                        <?php echo $fileInfo['mod_time']; ?>
                                    </span>

							<span class="col m1 text-right">
                            <?php if (is_file($fileInfo['file_path']) & $showinfobutton): ?>

                                <a href="javascript:void(0)" class="<?php echo $textcolor; ?> file-info-button">
                                    <i class="<?php echo $themeiconsright ? $color.'-text' : ''; ?> material-icons" style="font-size: 20px">info</i>
                                </a>

                            <?php else: ?>

                                <?php if ($lister->containsIndex($fileInfo['file_path'])): ?>

                                    <a href="<?php echo $fileInfo['file_path']; ?>" class="<?php echo $textcolor; ?> web-link-button" <?php if($lister->externalLinksNewWindow()): ?>target="_blank"<?php endif; ?>>
                                        <i class="<?php echo $themeiconsright ? $color.'-text' : ''; ?> material-icons" style="font-size: 20px">launch</i>
                                    </a>

                                <?php endif; ?>

                            <?php endif; ?>

                                    </span>
						</div>

					</a>
				</li>
				<?php endforeach; ?>

			</ul>
		</div>

		<?php file_exists('footer.php') ? include('footer.php') : include($lister->getThemePath(true) . "/default_footer.php"); ?>

		<!-- Modal Structure -->
		<div id="file-info-modal" class="modal <?php echo $lighttheme ? '' : $background.' '.$textcolor; ?>">
			<div class="modal-content">
				<h4 class="modal-title">{{modal_header}}</h4>

				<table id="file-info" class="table table-bordered">
					<tbody>

						<tr>
							<td class="table-title">MD5</td>
							<td class="md5-hash">{{md5_sum}}</td>
						</tr>

						<tr>
							<td class="table-title">SHA1</td>
							<td class="sha1-hash">{{sha1_sum}}</td>
						</tr>

					</tbody>
				</table>
			</div>
			<div class="modal-footer <?php echo $lighttheme ? '' : $background.' '.$textcolor; ?>">
				<a href="#!" class="<?php echo $lighttheme ? '' : $textcolor.' waves-light'; ?> modal-action modal-close waves-effect btn-flat">Agree</a>
			</div>
		</div>


		<!--<div id="file-info-modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">{{modal_header}}</h4>
                    </div>

                    <div class="modal-body">

                        <table id="file-info" class="table table-bordered">
                            <tbody>

                                <tr>
                                    <td class="table-title">MD5</td>
                                    <td class="md5-hash">{{md5_sum}}</td>
                                </tr>

                                <tr>
                                    <td class="table-title">SHA1</td>
                                    <td class="sha1-hash">{{sha1_sum}}</td>
                                </tr>

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>-->

	</body>

	</html>
