
var _paxSorted = ;
var _paxCnt = 0;

function addParticipant()
{
  var _oSelectBox = document.getElementById("entry_part");
  var _aOptions = _oSelectBox.getElementsByTagName("option");
   var _refresh = false;
   for (var _nIndex = 0, _nMaxIndex = _aOptions.length; _nIndex < _nMaxIndex; _nIndex++ )
   {
      var _oItem = _aOptions;
      if (_oItem.disabled)
      {
          continue;
      }
      if (!_oItem.selected)
      {
          continue;
      }
      _refresh = true;
      _paxCnt++;
      _paxSorted = _oItem.textContent;
      _oItem.selected=false;
      _oItem.disabled=true;
   }
   if (_refresh)
   {
      refreshSelBox();
   }
}

function refreshSelBox()
{
   _paxSorted.sort();
   var _selBox = document.getElementById("selected");
   var _aOptions = _selBox.getElementsByTagName("option");
   for (var nIndex = _aOptions.length -1; nIndex >= 0; nIndex-)
   {
      _selBox.removeChild(_aOptions);
   }

   for (var nIndex = 0; nIndex < _paxCnt; nIndex++ )
   {
      var oItem = document.createElement("option");
      oItem.textContent = _paxSorted;
      _selBox.appendChild( oItem );
   }
}


function removeParticipant()
{
   var _oSelBox = document.getElementById("selected");
   var _aOptions = _oSelBox.getElementsByTagName("option");
   var _refresh  = false;
   var _newList = ;
   var _removeList = ;

   for (var _nIndex = _aOptions.length - 1; _nIndex >= 0 ; _nIndex- )
   {
      var _oItem = _aOptions;
      if (! _oItem.selected)
      {
          _newList.push(_oItem.textContent);
          continue;
      }
      _removeList = 1;
      _paxCnt-;
      _refresh=true;
   }
   

   if (_refresh)
   {
     _newList.sort();
     _paxSorted = _newList;
     refreshSelBox();
     reEnable(_removeList);
   }
}


function reEnable(aArrList)
{
   var _oSelectBox = document.getElementById("entry_part");
   var _aOptions = _oSelectBox.getElementsByTagName("option");
   for (var _nIndex = 0, _nMaxIndex = _aOptions.length; _nIndex < _nMaxIndex; _nIndex++ )
   {
      var _oItem = _aOptions;
      if (!_oItem.disabled)
      {
          continue;
      }
      if (_oItem.textContent in aArrList )
      {
          _oItem.disabled = false;
          _oItem.checked=false;
          _oItem.defaultSelected=false;
      }
   }
  
}

function markOnlySelected(flag)
{
   var _oSelectBox = document.getElementById("entry_part");
   var _aOptions = _oSelectBox.getElementsByTagName("option");
   for (var _nIndex = 0, _nMaxIndex = _aOptions.length; _nIndex < _nMaxIndex; _nIndex++ )
   {
      var _oItem = _aOptions;
      _oItem.selected=false;
      if (!_oItem.disabled)
      {
          continue;
      }

      if (flag)
      {
        _oItem.disabled=false;
      }

      _oItem.selected = true;
      _oItem.defaultSelected=true;
      _oItem.checked=true;
   }
}

var _paxSorted = ;
var _paxCnt = 0;

function addParticipant()
{
  var _oSelectBox = document.getElementById("entry_part");
  var _aOptions = _oSelectBox.getElementsByTagName("option");
   var _refresh = false;
   for (var _nIndex = 0, _nMaxIndex = _aOptions.length; _nIndex < _nMaxIndex; _nIndex++ )
   {
      var _oItem = _aOptions;
      if (_oItem.disabled)
      {
          continue;
      }
      if (!_oItem.selected)
      {
          continue;
      }
      _refresh = true;
      _paxCnt++;
      _paxSorted = _oItem.textContent;
      _oItem.selected=false;
      _oItem.disabled=true;
   }
   if (_refresh)
   {
      refreshSelBox();
   }
}

function refreshSelBox()
{
   _paxSorted.sort();
   var _selBox = document.getElementById("selected");
   var _aOptions = _selBox.getElementsByTagName("option");
   for (var nIndex = _aOptions.length -1; nIndex >= 0; nIndex-)
   {
      _selBox.removeChild(_aOptions);
   }

   for (var nIndex = 0; nIndex < _paxCnt; nIndex++ )
   {
      var oItem = document.createElement("option");
      oItem.textContent = _paxSorted;
      _selBox.appendChild( oItem );
   }
}


function removeParticipant()
{
   var _oSelBox = document.getElementById("selected");
   var _aOptions = _oSelBox.getElementsByTagName("option");
   var _refresh  = false;
   var _newList = ;
   var _removeList = ;

   for (var _nIndex = _aOptions.length - 1; _nIndex >= 0 ; _nIndex- )
   {
      var _oItem = _aOptions;
      if (! _oItem.selected)
      {
          _newList.push(_oItem.textContent);
          continue;
      }
      _removeList = 1;
      _paxCnt-;
      _refresh=true;
   }
   

   if (_refresh)
   {
     _newList.sort();
     _paxSorted = _newList;
     refreshSelBox();
     reEnable(_removeList);
   }
}


function reEnable(aArrList)
{
   var _oSelectBox = document.getElementById("entry_part");
   var _aOptions = _oSelectBox.getElementsByTagName("option");
   for (var _nIndex = 0, _nMaxIndex = _aOptions.length; _nIndex < _nMaxIndex; _nIndex++ )
   {
      var _oItem = _aOptions;
      if (!_oItem.disabled)
      {
          continue;
      }
      if (_oItem.textContent in aArrList )
      {
          _oItem.disabled = false;
          _oItem.checked=false;
          _oItem.defaultSelected=false;
      }
   }
  
}

function markOnlySelected(flag)
{
   var _oSelectBox = document.getElementById("entry_part");
   var _aOptions = _oSelectBox.getElementsByTagName("option");
   for (var _nIndex = 0, _nMaxIndex = _aOptions.length; _nIndex < _nMaxIndex; _nIndex++ )
   {
      var _oItem = _aOptions;
      _oItem.selected=false;
      if (!_oItem.disabled)
      {
          continue;
      }

      if (flag)
      {
        _oItem.disabled=false;
      }

      _oItem.selected = true;
      _oItem.defaultSelected=true;
      _oItem.checked=true;
   }
}
