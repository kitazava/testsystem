
<div class="col-md-8">
        <div class="card-body">
            <?php 
                    if(isset($_GET['type']))
                    {
                        $typechecked = [];
                        $typechecked = $_GET['type'];
                        foreach($typechecked as $types){
                            $tests = "SELECT * FROM tests WHERE type_id in ($types)";
                            $tests_run = mysqli_query($connect, $tests);
                            if(mysqli_num_rows($tests_run)>0)
                            {
                                foreach($tests_run as $test):
                                    ?>
                                        <a 
                                            href="index.php?id=<?php echo $test['id']; ?>"
                                            style="text-decoration: none; font-size: 25px;"
                                        >
                                        <p><?= $test['title']; ?></p>
                                        </a>
                                    <?php
                                endforeach;
                            }
                        }
                    }
                    else
                    {
                        $tests = "SELECT * FROM tests";
                        $tests_run = mysqli_query($connect, $tests);
                        if(mysqli_num_rows($tests_run)>0)
                        {
                            foreach($tests_run as $test):
                                ?>
                                    <div>
                                        <a 
                                            href="index.php?id=<?php echo $test['id']; ?>"
                                            style="text-decoration: none; font-size: 25px;"
                                        >
                                        <p><?= $test['title']; ?></p>
                                        </a>
                                    </div>
                                <?php
                            endforeach;
                        }
                        else
                        {
                            echo "Не найден";
                        } 
                        
                    }
                ?>
        </div>
    </div>
</div>

