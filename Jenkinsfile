pipeline{
	agent any
	stages{
		stage('Starting'){
			steps{
				sh 'echo starting...'
			}
		}
		stage('Checking Docker'){
			steps{
				sh 'sudo docker ps'
			}
		}
		stage('Building Image'){
			steps{
				sh 'sudo docker build --tag=php .'
			}
			steps{
				sh 'sudo docker-compose up'
			}
		}
	
	}
}
