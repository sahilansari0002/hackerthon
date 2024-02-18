<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Notebook</title>
    <style>
        :root {
            --margin-line: #941c5a;
            --lines: #1d97b8;
        }

        html,
        body {
            background-color: #eee;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            min-height: 100%;
        }

        .paper {
            width: 850px;
            height: 1100px;
            background-color: #fff;
            background-image: linear-gradient(var(--lines) 0.05em, transparent 0.05em);
            background-size: 100% 2em;
            position: relative;
            box-shadow: 15px 15px 33px rgba(27, 27, 27, 0.1);

            &:before,
            &:after {
                content: "";
                position: absolute;
                top: 0;
            }

            &:before {
                height: 100%;
                width: 2px;
                background-color: var(--margin-line);
                left: 4em;
                z-index: 2;
            }

            &:after {
                height: 6em;
                width: 100%;
                background-color: #fff;
                left: 0;
                z-index: 1;
            }

            .holes {
                background-color: #eee;
                width: 35px;
                height: 35px;
                border-radius: 50%;
                display: block;
                z-index: 10;
                margin-left: 1em;
                margin-top: 6em;

                &:before,
                &:after {
                    content: "";
                    width: 35px;
                    height: 35px;
                    background-color: #eee;
                    position: absolute;
                    border-radius: 50%;
                }

                &:before {
                    top: 50%;
                }

                &:after {
                    top: calc(100% - 6em);
                }
            }
        }

        textarea {
            position: absolute;
            top: 6rem;
            left: 4rem;
            width: calc(100% - 5rem);
            height: calc(100% - 7rem);
            background-color: transparent;
            border: none;
            font-family: "Comic Sans";
            font-size: 2rem;
            line-height: 1;
            padding-left: 1rem;
            margin: 0;
            resize: none;
        }



    </style>
</head>
<body>
    <div class="paper">
        <div class="holes">
            <form action="save_assignment.php" method="post">
                <textarea name="assignment_content" onpaste="return false;" placeholder="Write your assignment"></textarea>
                <!-- Move the submit button outside the textarea -->
                <div class="submit-container">
                    <input type="submit" value="Submit Assignment">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
