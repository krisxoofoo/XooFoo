' Name: disk_start.vbs
' Location: Uniform Server
' Created By: The Uniform Server Development Team
' Edited Last By: Olajide Olaolorun (empirex)
' Comment: Re-Arranged everything to look nicely. 
' To Developers: Added the MySQL start option.
' MPG: Added auto drive detect and command prompt select 
' @translation     kris_fr (http://www.xoofoo.org)
' @specification   _LANGCODE: fr
' @specification   _CHARSET: UTF-8
' @version         $Id$

Dim WSHShell, dir, fso, letter, str1, str2, str3, str4 
Set fso = CreateObject("Scripting.FileSystemObject") 
Set WSHShell = WScript.CreateObject("WScript.Shell") 

'Locate next available drive letter -- Added MPG
letter=Asc("z")
while fso.DriveExists(Chr(letter)+":")
letter=letter-1
wend

' Build string to display
str1 = "Pour utiliser le disque libre trouve - cliquez sur OK ou" & vbCR 
str2 = "Specifiez la lettre du disque puis cliquez sur OK" & vbCR & vbCR 
str3 = "Note : Pour abandonner - cliquez sur Cancel"
str4 = str1 & str2 & str3
s=InputBox( str4 ,"Disque Serveur",UCASE(Chr(letter))) 

If s = "" Then 
WScript.Quit 
End If 
s=mid(s,1,1) 

t=MsgBox("Lancer MySQL ?", vbYesNo + vbQuestion, "Database Support") 
If t = vbNo Then 
m=" nomysql" 
Else 
m=" mysql" 
End If 

c=MsgBox("Lancer une invite de commandes pour les commandes MySQL ?", vbYesNo + vbQuestion, "Support Command-line MySQL") 
If c = vbNo Then 
cl="" 
Else 
cl=" console" 
End If 

WSHShell.run "Server_Start.bat "&s&m&cl,0,0 
WScript.sleep(1000)
