<?php

if (isset($error) && !empty($error)) {

    echo "<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                       {$error}
                   <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>";


}

if (isset($mensaje)&& !empty($mensaje)) {

    echo "<div class=\"alert alert-sucess alert-dismissible fade show\" role=\"alert\">
                       {$mensaje}
                   <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>";
}

