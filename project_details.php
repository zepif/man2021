<?php
    session_start();
    $link = mysqli_connect("localhost", "root", "root1", "users");
    $task_id = $_GET['project_id'];
    $sql = "SELECT * FROM `project` WHERE `id` LIKE '%$task_id%'";
    $result = mysqli_query($link, $sql);
    $task = $result->fetch_assoc();  
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style4.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Project Title</title>
</head>
    <body>
        <?php require "blocks/header.php" ?>
        <div class="container primary-content">
	<div class="primary-content-heading clearfix">
      <h2><?php echo $task['name']; ?></h2>
        <hr style="border:1px solid #fff">	
	<div class="row">
		<div class="col-md-8">
			<div class="project-section general-info">
				<h3>General Info</h3>
				<button type="button" class="btn btn-sm btn-default pull-right"><i class="fa fa-compose"></i> Edit Project</button>
                <p><?php echo task['info'];?></p>
				<div class="row">
					<div class="col-sm-9">
						<dl class="dl-horizontal">
							<dt>Date:</dt>
                            <dd><?php echo $task['fd'] . '.' . $task['fm'] . '.' . $task['fy'] . ' - ' . $task['ld'] . '.' . $task['lm'] . '.' . $task['ly']; ?></dd>
							<dt>Duration:</dt>
                            <dd>90 days <span class="text-muted"><small><?php require "calculate_date.php"?></small></span></dd>
							<dt>Priority:</dt>
							<dd><span class="label label-danger">HIGH</span></dd>
							<dt>Status:</dt>
                            <dd><span class="label label-success"><?php echo $task['statuts'] ?></span></dd>
							<dt>Team:</dt>
							<dd>
								<ul class="list-inline team-list">
                                    <?php require "member_list.php" ?>
									<li class="team-add">
										<i class="fa fa-person"></i>
										<button type="button" class="btn btn-sm btn-default"><i class="bi bi-plus-circle"></i> Add</button>
									</li>
								</ul>
							</dd>
						</dl>
					</div>
				</div>
			</div>
			<div class="project-section activity">
				<h3>Activity</h3>
				<ul class="list-unstyled project-activity-list">
					<li>
						<div class="media activity-item">
							<i class="fa fa-checkmark-circled pull-left text-success"></i>
							<div class="media-body">
								<p class="activity-title">All project tasks are on schedule</p>
								<small class="text-muted">2m ago</small>
							</div>
						</div>
					</li>
					<li>
						<div class="media activity-item">
							<a href="#" class="pull-left">
								<img src="img/av2.png" alt="Avatar" class="media-object avatar">
							</a>
							<div class="media-body">
								<p class="activity-title"><a href="#">Michael</a> has achieved 80% of his completed tasks</p>
								<small class="text-muted">36m ago</small>
							</div>
							<div class="btn-group pull-right activity-actions">
								<button type="button" class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-ios-arrow-down"></i>
									<span class="sr-only">Toggle Dropdown</span>
								</button>
								<ul class="dropdown-menu dropdown-menu-right" role="menu">
									<li><a href="#">Message Michael</a></li>
									<li><a href="#">Assign Task</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<div class="media activity-item">
							<i class="fa fa-unlocked pull-left text-danger"></i>
							<div class="media-body">
								<p class="activity-title">You have unsecure file permission on this project. Go to <a href="">File Manager</a> to fix it</p>
								<small class="text-muted">1h ago</small>
							</div>
						</div>
					</li>
					<li>
						<div class="media activity-item">
							<a href="#" class="pull-left">
								<img src="img/av2.png" alt="Avatar" class="media-object avatar">
							</a>
							<div class="media-body">
								<p class="activity-title"><a href="#">Jason</a> has been added to the team</p>
								<small class="text-muted">2h ago</small>
							</div>
							<div class="btn-group pull-right activity-actions">
								<button type="button" class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-ios-arrow-down"></i>
									<span class="sr-only">Toggle Dropdown</span>
								</button>
								<ul class="dropdown-menu dropdown-menu-right" role="menu">
									<li><a href="#">Message Jason</a></li>
									<li><a href="#">Assign Task</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<div class="media activity-item">
							<i class="fa fa-file-word-o pull-left"></i>
							<div class="media-body">
								<p class="activity-title">New file <a href="#">Project Proposalv2.docx</a> has been uploaded by <a href="#">Antonius</a></p>
								<small class="text-muted">3h ago</small>
							</div>
						</div>
					</li>
					<li>
						<div class="media activity-item">
							<i class="fa fa-printer pull-left text-warning"></i>
							<div class="media-body">
								<p class="activity-title">You have <a href="#">pending documents</a> on the printer server</p>
								<small class="text-muted">23h ago</small>
							</div>
						</div>
					</li>
					<li>
						<div class="media activity-item">
							<i class="fa fa-flag pull-left text-success"></i>
							<div class="media-body">
								<p class="activity-title">Project: <a href="#">Phase 1</a> has been flagged as completed by <a href="#">Antonius</a></p>
								<small class="text-muted">Yesterday</small>
							</div>
						</div>
					</li>
					<li>
						<div class="media activity-item">
							<a href="#" class="pull-left">
								<img src="img/av2.png" alt="Avatar" class="media-object avatar">
							</a>
							<div class="media-body">
								<p class="activity-title"><a href="#">Jane Doe</a> has updated file <a href="#">Marketing Campaign.docx</a></p>
								<small class="text-muted">Yesterday</small>
								<div class="activity-attachment">
									<div class="well well-sm">
										<strong>Revision Note:</strong>
										<p>Professionally evolve corporate services without ethical leadership. Proactively re-engineer client-focused infrastructures before alternative potentialities. Competently predominate just in time e-tailers for leveraged solutions.</p>
									</div>
								</div>
							</div>
							<div class="btn-group pull-right activity-actions">
								<button type="button" class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-ios-arrow-down"></i>
									<span class="sr-only">Toggle Dropdown</span>
								</button>
								<ul class="dropdown-menu dropdown-menu-right" role="menu">
									<li><a href="#">Message Jane Doe</a></li>
									<li><a href="#">Assign Task</a></li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
				<button type="button" class="btn btn-default center-block"><i class="fa fa-ios-refresh"></i> Load more</button>
			</div>
		</div>
		<div class="col-md-4">
			<div class="widget">
				<div class="widget-header clearfix">
					<h3><i class="fa fa-calendar"></i> <span>MY TODO LIST</span></h3>
					<div class="btn-group widget-header-toolbar">
						<a href="#" title="Expand/Collapse" class="btn btn-link btn-toggle-expand"><i class="fa fa-ios-arrow-up"></i></a>
						<a href="#" title="Remove" class="btn btn-link btn-remove"><i class="fa fa-ios-close-empty"></i></a>
					</div>
				</div>
				<div class="widget-content">
					<ul class="list-unstyled simple-todo-list">
                        <?php require "list_todo.php"?>
                    </ul>
				</div>
			</div>
			<div class="widget">
				<div class="widget-header clearfix">
					<h3><i class="fa fa-document"></i> <span>RECENT FILES</span></h3>
					<div class="btn-group widget-header-toolbar">
						<a href="#" title="Expand/Collapse" class="btn btn-link btn-toggle-expand"><i class="fa fa-ios-arrow-up"></i></a>
						<a href="#" title="Remove" class="btn btn-link btn-remove"><i class="fa fa-ios-close-empty"></i></a>
					</div>
				</div>
				<div class="widget-content">
					<ul class="fa-ul recent-file-list bottom-30px">
						<li><i class="fa-li fa fa-file-pdf-o"></i><a href="#">Project Requirements.pdf</a></li>
						<li><i class="fa-li fa fa-file-word-o"></i><a href="#">[DRAFT] System Specifications.docx</a></li>
						<li><i class="fa-li fa fa-file-picture-o"></i><a href="#">Marketing Content-v2.jpg</a></li>
						<li><i class="fa-li fa fa-file-zip-o"></i><a href="#">All-files-backup.zip</a></li>
					</ul>
					<button type="button" class="btn btn-sm btn-primary"><i class="fa fa-upload"></i> Upload</button> <a href="#" class="btn btn-sm btn-default"><i class="fa fa-folder"></i> See all files</a>
				</div>
			</div>
		</div>
	</div>
</div>
        <?php require "blocks/footer.php" ?>
    </body>
</html>
