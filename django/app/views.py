from django.http import HttpResponse

def home(request):
    return HttpResponse("<h1>Welcome to the DevOps Django App!</h1>")
