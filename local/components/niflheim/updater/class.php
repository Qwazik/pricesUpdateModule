<?
class classComponents extends CBitrixComponent
{
    function var1()
    {
        $arResult['var1'] = 'Отпработал метод1 компонента class';
        return $arResult;
    }

    public function executeComponent()
    {
        $this->arResult = array_merge($this->arResult, $this->var1());
        $this->includeComponentTemplate();
    }
}

?>