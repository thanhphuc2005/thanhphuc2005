from time import sleep
import requests,threading,os,sys
from colorama import init, Fore, Style
den = "\033[1;90m"
luc = "\033[1;32m"
trang = "\033[1;37m"
red = "\033[1;31m"
vang = "\033[1;33m"
tim = "\033[1;35m"
lamd = "\033[1;34m"
lam = "\033[1;36m"
purple = "\033[35m"
hong = "\033[1;95m"
xam = "\033[1;37;90m"
cam = "\033[1;38;2;255;165;0m"
xanhngoc = "\033[1;38;2;0;255;255m"
nau = "\033[1;38;2;139;69;19m"
vangnhat = "\033[1;38;2;255;255;224m"
hongdam = "\033[1;38;2;199;21;133m"
xanhlacay = "\033[1;38;2;34;139;34m"
xanhbienda = "\033[1;38;2;70;130;180m"

def clear():
    if(sys.platform.startswith('win')):
        os.system('cls')
    else:
        os.system('clear')
def banner():
 os.system("cls" if os.name == "nt" else "clear")
 banner = f"""
{Fore.YELLOW}______{Style.RESET_ALL}   {Fore.GREEN}______{Style.RESET_ALL}   {Fore.CYAN}______{Style.RESET_ALL}        {Fore.RED}_____{Style.RESET_ALL}     {Fore.BLUE}______{Style.RESET_ALL}     {Fore.MAGENTA}__{Style.RESET_ALL}   {Fore.YELLOW}__{Style.RESET_ALL}
{Fore.YELLOW}/\\  == \\{Style.RESET_ALL} {Fore.GREEN}/\\__  _\\{Style.RESET_ALL} {Fore.CYAN}/\\  ___/{Style.RESET_ALL}      {Fore.RED}/\\  __-.{Style.RESET_ALL}  {Fore.BLUE}/\\  ___/{Style.RESET_ALL}   {Fore.MAGENTA}/\\ \\ / /{Style.RESET_ALL}
{Fore.YELLOW}\\ \\  _-/{Style.RESET_ALL} {Fore.GREEN}\\/_/\\ \\/{Style.RESET_ALL} {Fore.CYAN}\\ \\ \\____{Style.RESET_ALL}     {Fore.RED}\\ \\ \\/\\ \\{Style.RESET_ALL} {Fore.BLUE}\\ \\  __\\{Style.RESET_ALL}   {Fore.MAGENTA}\\ \\ \\'/{Style.RESET_ALL}
{Fore.YELLOW} \\ \\_\\{Style.RESET_ALL}      {Fore.GREEN}\\ \\_\\{Style.RESET_ALL}  {Fore.CYAN}\\ \\_____/{Style.RESET_ALL}     {Fore.RED}\\ \\____-{Style.RESET_ALL}  {Fore.BLUE}\\ \\_____/{Style.RESET_ALL}  {Fore.MAGENTA}\\ \\__|{Style.RESET_ALL}
{Fore.YELLOW}  \\/_/{Style.RESET_ALL}       {Fore.GREEN}\\/_/{Style.RESET_ALL}   {Fore.CYAN}\\/_____/{Style.RESET_ALL}      {Fore.RED}\\/_____/{Style.RESET_ALL}   {Fore.BLUE}\\/_____/{Style.RESET_ALL}   {Fore.MAGENTA}\\/_/{Style.RESET_ALL}

\033[1;36m╠═══════════════════════════════════════════════╣
\033[1;36m║ \033[38;5;226m • \033[38;5;201m Website LH :\033[38;5;25m info.phuctapcode.site        \033[1;36m║
\033[1;36m╚═══════════════════════════════════════════════╝
"""
 for X in banner:
  sys.stdout.write(X)
  sys.stdout.flush() 
  sleep(0.00125)
print('')
clear()
banner()
ck_fb=input('\033[1m\033[38;5;51mNhập Cookie Facebook: \033[1;37m')
uid=input('\033[1m\033[38;5;51mNhập ID Bài Viết: \033[1;37m')
token_fb=input('\033[1m\033[38;5;51mNHẬP token facebook: ')

header={
    'cookie': ck_fb,
}
def Start(l):
    getTokenPage = requests.get(f"https://graph.facebook.com/v12.0/me/accounts?fields=access_token&limit=999999999&access_token={token_fb}",headers=header).json()['data']
    for tach in getTokenPage:
        uid_page=tach['id']
        access_token_page=tach['access_token']
        buff = requests.post(f"https://graph.facebook.com/me/feed?link=https://www.facebook.com/{uid}&published=0&access_token={access_token_page}",headers=header).text
        if "error" in buff:
            print(f'\033[1m\033[38;5;237m[\033[38;5;54mPTCDEV\033[38;5;237m]\033[0m \033[4m\033[38;5;164m{uid_page}\033[0m \033[1;31mTHẤT BẠI RỒI LÀ ACC DIE HAY GÌ Á RA COI ĐI')
        else:
            print(f'{tim}[PTCDEV] {vangnhat}{buff} {xanhngoc} THÀNH CÔNG ✅')


soluong = int(input('\033[1m\033[38;5;51mNhập Số Lượng: \033[1;37m'))
clear()
banner()
print('')
threades = []
for l in range(soluong):
    thread = threading.Thread(target=Start, args=(l,))
    threades.append(thread)
for t in threades:
    t.start()
for t in threades:
    t.join()
print('\033[1;31mChạy đủ số lượng rồi nhé')
