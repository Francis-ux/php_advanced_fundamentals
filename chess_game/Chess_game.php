<?php
include('chess_game_html.php') ?>
<?php

class Chess_game
{

    function row_side()
    {
        $row = 8;
        return $row;
    }
    function col_side()
    {
        $col = 8;
        return $col;
    }
    function letters()
    {
        $letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];
        return $letters;
    }
    function current_row()
    {
        $current_row = 0;
        return $current_row;
    }
    function option()
    {
        $option = isset($_POST['option']) ? $_POST['option'] : '';
        return $option;
    }
    function user_letter()
    {
        $user_letter = trim(isset($_POST['letters']) ? $_POST['letters'] : '');
        return $user_letter;
    }
    function user_number()
    {
        $user_number = trim(isset($_POST['numbers']) ? $_POST['numbers'] : '');
        return $user_number;
    }
    function alternate_white_color()
    {
        $html = "<div class='row'>";
        foreach ($this->letters() as $key => $letter) :
            $class = $key % 2 ? 'white ' : ' black ';
            if ($this->user_letter() == $letter && $this->user_number() == $this->current_row && $this->option() == 'King') {
                $selected = 'King';
            } else {
                $selected = false;
            }
            if ($this->user_letter() == $letter && $this->user_number() == $this->current_row && $this->option() == 'Queen') {
                $selected = 'Queen';
            } else {
                if ($this->user_letter() == $letter && $this->user_number() == $this->current_row && $this->option() == 'Knight') {
                    $selected = 'Knight';
                } else {
                    if ($this->user_letter() == $letter && $this->user_number() == $this->current_row && $this->option() == 'Rook') {
                        $selected = 'Rook';
                    } else {
                        if ($this->user_letter() == $letter && $this->user_number() == $this->current_row && $this->option() == 'Bishop') {
                            $selected = 'Bishop';
                        } else {
                            if ($this->user_letter() == $letter && $this->user_number() == $this->current_row && $this->option() == 'Pawn') {
                                $selected = 'Pawn';
                            } else {
                                if ($this->user_letter() == $letter && $this->user_number() == $this->current_row && $this->option() == 'King') {
                                    $selected = 'King';
                                } else {
                                    if ($this->user_letter() == $letter && $this->user_number() == $this->current_row && $this->option() == 'Knight') {
                                        $selected = 'Knight';
                                    } else {
                                        if ($this->user_letter() == $letter && $this->user_number() == $this->current_row) {
                                            $selected = 'Selected';
                                        } else {
                                            $selected = false;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }

            $html .= "<div class='box {$class}{$selected}'>{$letter}{$this->current_row}</div>";
        endforeach;
        $html .= "</div>";
        echo $html;
    }
    function alternate_black_color()
    {
        $html = "<div class='row'>";
        foreach ($this->letters() as $key => $letter) :
            $class = $key % 2 ? 'black ' : 'white ';
            if ($this->user_letter() == $letter && $this->user_number() == $this->current_row && $this->option() == 'King') {
                $selected = 'King';
            } else {
                $selected = false;
            }
            if ($this->user_letter() == $letter && $this->user_number() == $this->current_row && $this->option() == 'Queen') {
                $selected = 'Queen';
            } else {
                if ($this->user_letter() == $letter && $this->user_number() == $this->current_row && $this->option() == 'Pawn') {
                    $selected = 'Pawn';
                } else {
                    if ($this->user_letter() == $letter && $this->user_number() == $this->current_row && $this->option() == 'knight') {
                        $selected = 'knight';
                    } else {
                        if ($this->user_letter() == $letter && $this->user_number() == $this->current_row && $this->option() == 'Rook') {
                            $selected = 'Rook';
                        } else {
                            if ($this->user_letter() == $letter && $this->user_number() == $this->current_row && $this->option() == 'Bishop') {
                                $selected = 'Bishop';
                            } else {
                                if ($this->user_letter() == $letter && $this->user_number() == $this->current_row && $this->option() == 'King') {
                                    $selected = 'King';
                                } else {
                                    if ($this->user_letter() == $letter && $this->user_number() == $this->current_row && $this->option() == 'Knight') {
                                        $selected = 'Knight';
                                    } else {
                                        if ($this->user_letter() == $letter && $this->user_number() == $this->current_row) {
                                            $selected = 'Selected';
                                        } else {
                                            $selected = false;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
            $html .= "<div class='box {$class}{$selected} '>{$letter}{$this->current_row}</div>";
        endforeach;
        $html .= "</div>";
        echo $html;
    }
    var $current_row = 0;
    function looping_section()
    {
        for ($i = 1; $i <= $this->row_side(); $i++) :
            $this->current_row++;

            if ($i % 2 == 0) :
                $this->alternate_white_color();
            else :
                $this->alternate_black_color();
            endif;
        endfor;
    }
}
$Chess_game = new Chess_game();
$Chess_game->looping_section();
