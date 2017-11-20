import argparse

parser = argparse.ArgumentParser(description='Process some integers.')
parser.add_argument('source_path', type=str, help='an integer for the accumulator')
parser.add_argument('dest_path', type=str, help='sum the integers (default: find the max)')
args = parser.parse_args()
print(args.source_path, args.dest_path)
source_file = open(args.source_path)
dest_file = open(args.dest_path, "w")

lines = source_file.readlines()

started = False
# print(lines)
for i in lines:
    if started and "###\n" not in i:
        dest_file.write(i)
    if "###\n" in i:
        started = not started

source_file.close()
dest_file.close()
