//##################################################################
// Copyright 2004 - 2009 The Uniform Server Development Team
// Start.exe Application, Starts UniTray and informs user.
// Date: 7-9-2009
// Version: 1.0
// Last edited by MPG(ric)
//##################################################################

#include <windows.h>
#include <windowsx.h>
#include <commctrl.h>
#include <string.h>
#include "new_startres.h"

#include <stdheaders.h>
#include <shellapi.h>

#include <Tlhelp32.h>

// --- variables ---------------------------------------------------------------
TCHAR curWorkingDir[MAX_PATH]=""; // save path where this prog was called from.
TCHAR appPath[MAX_PATH]="";       // stores the fully-qualified path to this file
// -----------------------------------------------------------------------------

HINSTANCE hInst;	          // Instance handle
HWND hwndMain;		          //Main window handle

LRESULT CALLBACK MainWndProc(HWND hwnd,UINT msg,WPARAM wParam,LPARAM lParam);

static BOOL InitApplication(void){
  WNDCLASS wc;
  memset(&wc,0,sizeof(WNDCLASS));
  wc.style = CS_HREDRAW|CS_VREDRAW |CS_DBLCLKS ;
  wc.lpfnWndProc = (WNDPROC)MainWndProc;
  wc.hInstance = hInst;
  wc.hbrBackground = (HBRUSH)(COLOR_WINDOW+1);
  wc.lpszClassName = "new_startWndClass";
  wc.lpszMenuName = MAKEINTRESOURCE(IDMAINMENU);
  wc.hCursor = LoadCursor(NULL,IDC_ARROW);
  wc.hIcon = LoadIcon(NULL,IDI_APPLICATION);
  if (!RegisterClass(&wc)) return 0;
  return 1;
}

HWND Createnew_startWndClassWnd(void){
  return CreateWindow("new_startWndClass","new_start",
    WS_MINIMIZEBOX|WS_VISIBLE|WS_CLIPSIBLINGS|WS_CLIPCHILDREN|WS_MAXIMIZEBOX|WS_CAPTION|WS_BORDER|WS_SYSMENU|WS_THICKFRAME,
    CW_USEDEFAULT,0,CW_USEDEFAULT,0,
    NULL,
    NULL,
    hInst,
    NULL);
}

void MainWndProc_OnCommand(HWND hwnd, int id, HWND hwndCtl, UINT codeNotify){
  switch(id) {
    case IDM_EXIT:
    PostMessage(hwnd,WM_CLOSE,0,0);
    break;
  }
}

LRESULT CALLBACK MainWndProc(HWND hwnd,UINT msg,WPARAM wParam,LPARAM lParam){

  switch (msg){

  case WM_CREATE:{

    char unitray_path[100];                        // complete path to executable
    char unitray_parameters[100];                  // list of parameters
    GetCurrentDirectory(MAX_PATH,curWorkingDir);   // current required to build paths

    // Check for killer spaces in path to UniServer
    char * pch;                                    // define pointer
    pch=strchr(curWorkingDir,' ');                 // Is there a space to folder UniServer

    if(pch==NULL){                                 // No: Ok to run UniTray
     sprintf(unitray_path,"%s\\usr\\local\\php\\php.exe",curWorkingDir);
     sprintf(unitray_parameters," -n  %s\\unicon\\tray_menu\\start_unitray.php",curWorkingDir);

     ShellExecute( NULL,"",unitray_path ,unitray_parameters , curWorkingDir , SW_HIDE );

//     MessageBox(hwnd,"UniTray created in System Tray."
//      "\nBlue Square containing a number."
//      "\n\nLeft or right mouse click to display menus."
//      "\nTop menu item runs the servers."
//      "\nSecond menu item stops the servers."
//      "\n\nCopyright: Uniform Server Development Team"
//      "\nhttp://www.uniformserver.com"
//      , "Uniform Server V5-Nano series" ,MB_OK);

       DestroyWindow(hwnd);                         // Send message to kill window
    }
    else{                                           // Yes: space found inform user
     MessageBox(hwnd,"Error: Unable to start UniTray! "
      "\n\nA space was detected in path to folder UniServer"
      "\nSpaces are not allowed in folder names."
      "\n\nIf possible please remove these spaces"
      "\n\nAlternatively move servers to a new location"
      "\nthat does not contain spaces."
      , "Uniform Server V5-Nano series" ,MB_OK);

     DestroyWindow(hwnd);                          // Send message to kill window
    }// end else

  }//end crate
  break;
  case WM_COMMAND:
    HANDLE_WM_COMMAND(hwnd,wParam,lParam,MainWndProc_OnCommand);
    break;
  case WM_DESTROY:
    PostQuitMessage(0);
    break;
  default:
    return DefWindowProc(hwnd,msg,wParam,lParam);
 }
 return 0;
}

int WINAPI WinMain(HINSTANCE hInstance, HINSTANCE hPrevInstance, LPSTR lpCmdLine, INT nCmdShow){
  MSG msg;
  HANDLE hAccelTable;

  hInst = hInstance;
  if (!InitApplication())
    return 0;
  hAccelTable = LoadAccelerators(hInst,MAKEINTRESOURCE(IDACCEL));
  if ((hwndMain = Createnew_startWndClassWnd()) == (HWND)0)
    return 0;
  ShowWindow(hwndMain,SW_SHOW);
  while (GetMessage(&msg,NULL,0,0)) {
    if (!TranslateAccelerator(msg.hwnd,hAccelTable,&msg)) {
      TranslateMessage(&msg);
      DispatchMessage(&msg);
    }
   }
  return msg.wParam;
}
