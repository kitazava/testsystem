<?php session_start() ?>

<div class="col-md-8">
        <div class="card mt-4">
            <div class="card-header">
                <h2 class="text-center">Фильтр</h2>
            </div>
            <div class="card-body">
                <form action="" method="GET">
                    <?php
                        $type_query = "SELECT * FROM tests";
                        $type_query_run = mysqli_query($connect,$type_query );
                        if(mysqli_num_rows($type_query_run)>0)
                        {
                            foreach($type_query_run as $type)
                            {
                                $checked = [];
                                if(isset($_GET['type']))
                                {
                                    $checked = $_GET['type'];
                                }
                                ?>
                                    <div>
                                        <input class="form-check-input" type="checkbox" name="type[]" value="<?=$type['id']; ?>"
                                        <?php if(in_array($type['id'], $checked)) { echo "checked";}?>
                                        />
                                        <?= $type['type_language']; ?>
                                    </div>
                                <?php
                            }
                        }
                        else
                        {
                            echo "Нету";
                        }
                    ?>
                        <button type="submit" class="btn btn-primary">Фильтровать</button>
                </form>
            </div>
        </div>  

    <div class="card mt-4">
        <div class="card-header">
            <h2 class="text-center">Список тестов</h2>
        </div>

        <div class="card-body">
            <?php 
                    if(isset($_GET['type']))
                    {
                        $typechecked = [];
                        $typechecked = $_GET['type'];
                        foreach($typechecked as $types){
                            $tests = "SELECT * FROM tests WHERE id in ($types)";
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
                            else
                            {
                                echo "Нету";
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
                            echo "Нету";
                        }
                    }

                    
                ?>
        </div>
    </div>
</div>
