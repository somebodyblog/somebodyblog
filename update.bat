@ECHO OFF&PUSHD %~DP0 &TITLE Git �ֿ����
mode con cols=35 lines=20
color 2F
color 2F

SetLocal EnableDelayedExpansion
:Menu
Cls
@ echo.
@ echo.����������   ѡ ��
@ echo.
@ echo.     �Զ���ȡ���� �� ������1
@ echo.
@ echo.     �Զ����ʹ��� �� ������2
@ echo.
@ echo.     �ֶ����ʹ��� �� ������3
@ echo.
@ echo.     ����Զ�ֿ̲� �� ������4
@ echo.
@ echo.      �˳�������  �� ������5
@ echo.
set /p xj= �������ֲ����س���
if /i "%xj%"=="1" Goto Install
if /i "%xj%"=="2" Goto Push
if /i "%xj%"=="3" Goto Establish
if /i "%xj%"=="4" Goto custom
if /i "%xj%"=="5" Goto Uninstall
@ echo.
echo      ѡ����Ч������������
ping -n 2 127.1>nul
goto menu
:Install
@ echo.
ECHO ���������ڰ�װ��..���Ե�..
XXXXX
goto Install2
:Establish
XXXXX
:Push
git add --all
git commit -m "update"
git push origin
ECHO �������ͳɹ�
//goto fanhui
:Uninstall
@ echo.
echo ����������ж����..���Ե�..
XXXXX
goto Uninstall2
:custom
start Program\Xmp.ini
:fanhui
@ ECHO.
ECHO �������������..
goto menu
:Install2
@ ECHO.
ECHO ��������װ���..
goto menu
:Uninstall2
@ ECHO.
ECHO ������ж�����..
goto menu