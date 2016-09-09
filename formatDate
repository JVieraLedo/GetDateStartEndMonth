public static function formatearFechaConMes($fechaIN, $month)
    {
        $aDate = explode('/', $fechaIN);
        switch ($month[0]) {
            case '-':
                $fechaOUT = strtotime('last day of ' . $month . ' month', strtotime(date($aDate[2] . '-' . $aDate[1] . '-' . $aDate[0])));
                break;
            case '+':
                $fechaOUT = strtotime('first day of ' . $month . ' month', strtotime(date($aDate[2] . '-' . $aDate[1] . '-' . $aDate[0])));
                break;
            default:
                $fechaOUT = strtotime('first day of +' . $month . ' month', strtotime(date($aDate[2] . '-' . $aDate[1] . '-' . $aDate[0])));
                break;
        }
        return date('Y-m-d', $fechaOUT);
    }
