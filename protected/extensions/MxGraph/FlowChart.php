<?php
/*
 * Nama Ekstensi : MxGraph 
 * Framework : Yii
 * Author : Muhammad Khayat
 * Dibuat pada : 19 Oktober 2012 23:34 WIB
 * Deskripsi : Ektensi ini dikembangkan menggunakan pustaka mxGraph kemudian dikustomisasi untuk SenimanDigital Project
 */
?>
<?php

class FlowChart extends CWidget{
    // Variabel public : konfigurasi MxGraph
    public $config = array();
    //URL assets
    private $_assets;
    
    /*
     * @param $config Array
     * @return HTML Javascript yang membangkitkan sebuah editor Graph
     */

    protected function registerClientScript()
    {
        // ...publish CSS or JavaScript file here...
        $cs=Yii::app()->clientScript;
        $cs->registerCssFile($this->ambilUrlAsset().'/styles/grapheditor.css');
        
        $config = $this->defaultConfig();
        $var_string='';
        foreach($config as $variable=>$value){
            $var_string.='var '.$variable.'='.CJavaScript::encode($value).';';
        }
        $cs->registerScript('AMxGraph_1',  $var_string,CClientScript::POS_HEAD);
        
        $cs->registerScript('BMxGraph_2',"
           var urlParams = (function(url)
		{
			var result = new Object();
			var idx = url.lastIndexOf('?');
	
			if (idx > 0)
			{
				var params = url.substring(idx + 1).split('&');
				
				for (var i = 0; i < params.length; i++)
				{
					idx = params[i].indexOf('=');
					
					if (idx > 0)
					{
						result[params[i].substring(0, idx)] = params[i].substring(idx + 1);
					}
				}
			}
			
			return result;
		})(window.location.href); 
                ",CClientScript::POS_HEAD);
        
        $cs->registerScript('CMxGraph_3',"
             mxLanguage = urlParams['lang'];
             mxLanguages = ['de'];       
             ",CClientScript::POS_HEAD);
        
        $cs->registerScriptFile($this->ambilUrlAsset().'/src/js/mxClient.js',CClientScript::POS_BEGIN);
        $cs->registerScriptFile($this->ambilUrlAsset().'/js/Editor.js',CClientScript::POS_BEGIN);
        $cs->registerScriptFile($this->ambilUrlAsset().'/js/Graph.js',CClientScript::POS_BEGIN);
        $cs->registerScriptFile($this->ambilUrlAsset().'/js/Shapes.js',CClientScript::POS_BEGIN);
        $cs->registerScriptFile($this->ambilUrlAsset().'/js/EditorUi.js',CClientScript::POS_BEGIN);
        $cs->registerScriptFile($this->ambilUrlAsset().'/js/Actions.js',CClientScript::POS_BEGIN);
        $cs->registerScriptFile($this->ambilUrlAsset().'/js/Menus.js',CClientScript::POS_BEGIN);
        $cs->registerScriptFile($this->ambilUrlAsset().'/js/SidebarFlowchart.js',CClientScript::POS_BEGIN);
        $cs->registerScriptFile($this->ambilUrlAsset().'/js/Toolbar.js',CClientScript::POS_BEGIN);
        $cs->registerScriptFile($this->ambilUrlAsset().'/js/Dialogs.js',CClientScript::POS_BEGIN);        
        $cs->registerScriptFile($this->ambilUrlAsset().'/jscolor/jscolor.js',CClientScript::POS_BEGIN);
        
        
        
    }
    public function run(){
        self::registerClientScript();
        echo CHtml::openTag('div', array('class'=>'geEditor'));
        echo '<script type="text/javascript">';
        
        echo"
            // Extends EditorUi to update I/O action states
		(function()
		{
			var editorUiInit = EditorUi.prototype.init;
			
			EditorUi.prototype.init = function()
			{
				editorUiInit.apply(this, arguments);
				this.actions.get('export').setEnabled(false);

				// Updates action states which require a backend
				if (!useLocalStorage)
				{
					mxUtils.post(OPEN_URL, '', mxUtils.bind(this, function(req)
					{
						var enabled = req.getStatus() != 404;
						this.actions.get('open').setEnabled(enabled || fileSupport);
						this.actions.get('import').setEnabled(enabled || fileSupport);
						this.actions.get('save').setEnabled(enabled);
						this.actions.get('saveAs').setEnabled(enabled);
						this.actions.get('export').setEnabled(enabled);
					}));
				}
			};
		})();
	
		new EditorUi(new Editor());
            ";
        echo '</script>';
	echo CHtml::closeTag('div');
        
    }
    /*
     * @return Array - default Config
     */
    public function defaultConfig(){
        return array(
            // Public global variables
            'MAX_REQUEST_SIZE'=>10485760,
            'MAX_WIDTH' => 6000,
            'MAX_HEIGHT'=> 6000,
            // URLs for save and export
            'EXPORT_URL' => '/export',
            'SAVE_URL' => '/save',
            'OPEN_URL' => '/open',
            'RESOURCES_PATH' => $this->ambilUrlAsset().'/resources',
            'RESOURCE_BASE' => $this->ambilUrlAsset().'/resources/grapheditor',
            'STENCIL_PATH' => $this->ambilUrlAsset().'/stencils',
            'IMAGE_PATH' => $this->ambilUrlAsset().'/images',
            'STYLE_PATH' => $this->ambilUrlAsset().'/styles',
            'CSS_PATH' => $this->ambilUrlAsset().'/styles',
            'OPEN_FORM' => $this->ambilUrlAsset().'/open.html',
            // Specifies connection mode for touch devices (at least one should be true)
            'tapAndHoldStartsConnection' => true,
            'showConnectorImg' => true,
            'mxLoadResources' =>false,
            'mxBasePath' => $this->ambilUrlAsset().'/src',	

        );
    }
    /**
    * @return string base URL yang mengandung semua berkas aset dari ekstensi ini - GET
    */
    public function ambilUrlAsset()
    {
        if($this->_assets===null)
            $this->_assets=Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('ext.MxGraph.assets'),false,-1,YII_DEBUG);
        return $this->_assets;
    }    
    
    /**
    * @param string base URL yang mengandung semua berkas aset dari ekstensi ini - SET
    */
    public function setelUrlAsset($value)
    {
        $this->_assets=$value;
    }
    /*
     * @param $path - path dari berkas CSS
     * @param $media - sifat media CSS (screen,all etc..)
     * @return script CSS link
     */
    public function daftarkanCss($path, $media='all')
    {
        $href = $this->ambilUrlAsset().'/'.$path;
        return '<link rel="stylesheet" type="text/css" href="'.$href.'" media="'.$media.'" />';
    }
    /*
     * @param $path - path dari berkas Javascript
     * @return Javascript code
     */
    public function daftarkanJs($path)
    {
        $src = $this->ambilUrlAsset().'/'.$path;
        return '<script type="text/javascript" src="'.$src.'"></script>';
    }

}
?>