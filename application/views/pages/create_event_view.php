<?php

    if(! $this->session->userdata('username'))
    {
        redirect(base_url('PestControl/index'));
    }

?>






<!-- nav class="navbar navbar-default">
      <div class="container-fluid">
       <?php foreach($pestcontrols as $pestcontrol): ?>
                 
                 <?php
                    if($this->session->userdata('username') == $pestcontrol['username'])
                    {
                        echo $pestcontrol['pestcontrol_name'];
                        $id = $pestcontrol['pestcontrol_id'];
                    }
                 ?>

                <?php endforeach; ?>
      </div>
    </nav> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('../assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('../assets/css/style.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('../assets/font-awesome/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('../assets/plugins/fullcalendar/fullcalendar.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'); ?>">
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Calendar</h1>
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Add Calendar Event</h4>
                        </div>
                        <div class="modal-body">

                            <form method="POST" action="<?php echo base_url('event/add_event'); ?>">
                            <input type="hidden" name="pestcontrol_id" value="<?php echo $pestcontrols[0]['pestcontrol_id']; ?>">
                            <div class="form-group">
                                <label for="p-in" class="col-md-4 label-heading">Event Name</label>
                                <div class="col-md-8 ui-front">
                                    <input type="text" class="form-control" name="name" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="p-in" class="col-md-4 label-heading">Description</label>
                                <div class="col-md-8 ui-front">
                                    <input type="text" class="form-control" name="description">
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label for="dtp_input1" class="col-md-4">Start Date</label>
                                <div class="input-group date form_datetime col-md-8">
                                    <input class="form-control" size="16" type="text" value="" readonly>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                    
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label class="col-sm-4">Start Date</label>
                                <div class="col-sm-8">
                                    <div class="input-group input-medium date form_datetime" data-date-format="yyyy-mm-dd" data-date-viewmode="years">
                                        <input type="text" name="start_date" class="form-control" readonly>
                                        <span class="input-group-addon"><i class="fa fa-calendar font-dark"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="p-in" class="col-md-4 label-heading">End Date</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="end_date">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Add Event">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="calendar">
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url('../assets/js/jquery.min.js'); ?>"></script>      
<script type="text/javascript" src="<?php echo base_url('../assets/js/moment.min.js'); ?>"></script>      
<script type="text/javascript" src="<?php echo base_url('../assets/js/bootstrap.min.js'); ?>"></script>      
<script type="text/javascript" src="<?php echo base_url('../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'); ?>"></script>      
<script type="text/javascript" src="<?php echo base_url('../assets/plugins/fullcalendar/fullcalendar.js'); ?>"></script>

<script type="text/javascript">
var date_last_clicked = null;

$('#calendar').fullCalendar({
    eventSources: [
    {
        events: function(start, end, timezone, callback) {
            $.ajax({
                url: '<?php echo base_url('../calendar/event/get_events') ?>',       
                dataType: 'json',
                data: {                
                    start: start.unix(),
                    end: end.unix()
                },
                success: function(msg) {
                    var events = msg.events;
                    callback(events);
                }
            });
        }
    },
    ],
    dayClick: function(date, jsEvent, view) {
        date_last_clicked = $(this);
        $(this).css('background-color', '#bed7f3');
        $('#addModal').modal();
    },
});

$(".form_datetime").datepicker({
    format: "dd MM yyyy",
    autoclose: true,
    todayBtn: true,
    pickerPosition: "bottom-left"
});
</script>

</body>
</html>