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
                                       script{
						dockerImage=docker.build registry + ": $BUILDNUMBER"
  	                                }
				}
                        }
                }
}

