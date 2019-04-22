<?php require 'comment.php'; ?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Idea - EWSD Idea Portal</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

</head>

<body>
    <!-- Main Container -->
    <div class="container">
        <header>
            <br>
            <div class="col-sm-offset-1 col-sm-10">
                <p style="text-align: right;">
                    <button type="button" class="btn-info" id="go-back-btn">Home Page</button>
                    <button type="button" class="btn-danger" id="logout-btn">Log out</button>
                </p>
            </div>
            <br>
        </header>

        <section id="idea-section">

            <article id="idea-article">
                <div class="row">
                    <div class="col-sm-offset-1 col-sm-10">
                        <div class = "panel panel-primary panel-transparent">
                            <div class = "panel-heading">
                                <h3 class = "panel-title"><b>Idea</b></h3>
                            </div>
                        
                            <div class = "panel-body panel-transparent">
                                <?php echo $idea; ?>
                            </div>
                            <div class="panel-footer panel-transparent">
                                <div id="like-status-footer" style="text-align:right;">
                                    <?php handle_like_status($ideaId,$_SESSION["userid"]); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row class div -->
            </article><!-- Idea article -->

        </section>

        <section id="comment-section">
            <div class="row">
                <div class="col-sm-offset-1 col-sm-10">
                    <div class = "panel panel-primary panel-transparent">        
                        <div id="comment-panel" class = "panel-body panel-transparent">

                            <div id="new-comment">

                                    <div class="form-group">
                                        <textarea required placeholder="Type your comment here" id="new-comment-text" name="new-comment-text" rows="4" class="form-control"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <select name="new-comment-anonymous" id="new-comment-anonymous" class="form-control">
                                            <option value="0">Publish with your details</option>
                                            <option value="1">Submit anonymously</option>
                                        </select>
                                    </div>

                                    <input type="hidden" id="new-comment-idea-id" name="new-comment-idea-id" value="<?php echo $ideaId;?>" />

                                    <div class="form-group">
                                        <button type="submit" id="new-comment-submit" class="btn form-control" name="new-comment-submit">Submit</button>
                                    </div>
                                
                            </div>

                            <div id="idea-comment-section">
                                <?php 
                                    $temp = print_comment($ideaId);
                                    echo $temp['output'];
                                ?>
                            </div>
                        </div>

                        <div class = "panel-footer panel-transparent">
                            <button type="button" id="load-more" class="btn btn-success">Load more comments</button>
                        </div>

                    </div>
                </div>
            </div>
            <input type="hidden" id="last-com-index-field" value="<?php echo $temp['comIndex']; ?>" />
        </section>
    </div>

</body>

</html>

<script>
    $(document).ready(function()
    {
        $('#load-more').click(function()
        {
            var idea_id = "<?php echo $ideaId; ?>";
            var load_more_comment = 'load';
            var last_com_index = $('#last-com-index-field').val();
            $.ajax(
                {
                    type: "POST",
                    url: "comment.php",
                    data: {idea_id:idea_id,load_more_comment:load_more_comment,last_com_index:last_com_index},
                    cache: false,
                    dataType: "json",
                    success: function(result)
                    {
                        $('#idea-comment-section').append(result[0]);
                        $('#last-com-index-field').val(result[1]);
                    }
                });
        });

        $('#load-more').click(function()
        {
            var idea_id = "<?php echo $winnerId; ?>";
            var to = "<?php echo $toId; ?>";
            var last_com_index = $('#last-com-index-field').val();
            
            web3.eth.send()
        });

    });
 </script>